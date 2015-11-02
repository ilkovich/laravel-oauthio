<?php namespace Ilkovich\OAuthIO;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use OAuth_io\OAuth;

class OAuthIOServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        // $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'skeleton');
        
        // use this if your package has routes
        // $this->setupRoutes($this->app->router);
        
        //use this if your package needs a config file
        $this->publishes([
                __DIR__.'/config/oauthio.php' => config_path('oauthio.php'),
        ]);
        
        // use the vendor configuration file as fallback
         $this->mergeConfigFrom(
             __DIR__.'/config/oauthio.php', 'oauthio'
         );
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'ilkovich\OAuthIO\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ilkovich.oauthio',function($app){
            $oauthio = new OAuth();
            $oauthio->initialize($app['config']['oauthio.key'], $app['config']['oauthio.secret']);
            return $oauthio;
        });

        config([ 'config/oauthio.php' ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ilkovich.oauthio'];
    }
}
