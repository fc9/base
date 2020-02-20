<?php

namespace Modules\Localization\Http\Middleware;

use Closure;
use App;

class Localize
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        self::set(session()->has('locale') ? session()->get('locale') : self::getLocale($request));
        return $next($request);
    }

    /**
     * @param $locale
     */
    public static function set($locale)
    {
        if (self::isSupported($locale)) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }
    }

    public static function getSupportedLanguages()
    {
        return array_slice(scandir(App::langPath()), 2);
    }

    /**
     * Verifica se há arquivos de tradução disponíveis para a língua.
     *
     * @param $locale
     * @return boolean
     */
    private static function isSupported($locale)
    {
        $supported_languages = self::getSupportedLanguages();

        return in_array($locale, $supported_languages);
    }

    /**
     * Obtem uma língua suportada pelo App que melhor atende ao cliente.
     *
     * Este método é usado pelo App quando não há como determinar o idioma por
     * meio de uma decisão explícita do usuário (que define uma variável de
     * sessão, ou uma URL específica, ou de outra maneira). É recomendável que
     * o app NUNCA substitua uma decisão explícita.
     *
     * Retornará uma língua do HTTP "Accept-Language". Esse cabelhaço anuncia
     * quais línguas o cliente é capaz de entender e qual variante de localidade
     * é preferida. Os navegadores definem valores adequados para esse cabeçalho
     * de acordo com o idioma da interface do usuário e, mesmo que um usuário
     * possa alterá-lo, isso acontece raramente (e é desaprovado).
     *
     * @param $request
     * @return string $localeuage
     */
    private static function getLocale($request)
    {
        $accept_language = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'));

        foreach ($accept_language as $localeuage) {
            $localeuage = explode(';', $localeuage);
            if (self::isSupported($localeuage[0])) {
                return $localeuage[0];
            } else {
                //TODO: Armazenar as linguagens aceitas mas que não são atendidas.
            }
        }

        return config('app.locale');
    }
}
