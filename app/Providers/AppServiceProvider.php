<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->registerBladeDirectives();
    }

    /**
     * Register additional directives of Blade.
     *
     * @return void
     */
    public function registerBladeDirectives()
    {
        Blade::directive('url', function ($uri) {
            return "<?php echo url({$uri}); ?>";
        });

        Blade::directive('route', function ($name, $params = null) {
            return "<?php echo route({$name}, {$params}); ?>";
        });
    }
}
