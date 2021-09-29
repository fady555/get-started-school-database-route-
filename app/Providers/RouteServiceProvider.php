<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespace_api = 'App\Http\Controllers\ControllerApi';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        //==============================================
        $this->mapApiRoutesAdmin();
        $this->mapApiRoutesTreasury();
        $this->mapApiRoutesControl();
        $this->mapApiRoutesHeadmaster();
        $this->mapApiRoutesGeneral();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
//================================================================
    protected function mapApiRoutesAdmin()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace_api)
            ->group(base_path('routes/admin/api.php'));
    }
    protected function mapApiRoutesHeadmaster()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace_api)
            ->group(base_path('routes/headmaster/api.php'));
    }
    protected function mapApiRoutesTreasury()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace_api)
            ->group(base_path('routes/treasury/api.php'));
    }

    protected function mapApiRoutesGeneral()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace_api)
            ->group(base_path('routes/general/api.php'));
    }


    protected function mapApiRoutesControl()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace_api)
            ->group(base_path('routes/controle/api.php'));
    }



}
