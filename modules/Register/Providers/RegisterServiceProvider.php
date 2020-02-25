<?php

namespace Modules\Register\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('Register', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register Config.
     *
     * @return void
     */
    protected function registerConfig()
    {

        $this->publishes([
            __DIR__.'/path/to/Config/courier.php' => config_path('courier.php'),
        ]);

        $this->publishes([
            module_path('Register', 'Config/config.php') => config_path('register.php'),
        ], 'Config');
        $this->mergeConfigFrom(
            module_path('Register', 'Config/config.php'), 'register'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/register');

        $sourcePath = module_path('Register', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/register';
        }, \Config::get('view.paths')), [$sourcePath]), 'register');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/register');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'register');
        } else {
            $this->loadTranslationsFrom(module_path('Register', 'Resources/lang'), 'register');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('Register', 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
