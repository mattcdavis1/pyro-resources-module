<?php namespace Anomaly\Streams\Addon\Module\Resources\Provider;

use Anomaly\Streams\Addon\Module\Resources\Session\SessionService;
use Illuminate\Routing\Router;

/**
 * Class RouteServiceProvider
 *
 */
class RouteServiceProvider extends \Illuminate\Foundation\Support\Providers\RouteServiceProvider
{

    /**
     * The controllers to scan for route annotations.
     *
     * @var array
     */
    protected $scan = [];

    /**
     * All of the module's route middleware keys.
     *
     * @var array
     */
    protected $middleware = [
        'auth' => 'Anomaly\Streams\Addon\Module\Resources\Http\Middleware\CheckAuthentication',
    ];

    /**
     * Called before routes are registered.
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function before()
    {
        //
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->when('admin*', 'auth');

        $this->registerAdminRoutes($router);
    }

    /**
     * Register user routes.
     *
     * @param Router $router
     */
    private function registerAdminRoutes(Router $router)
    {
        $router->any(
            'admin/resources',
            'Anomaly\Streams\Addon\Module\Resources\Http\Controller\Admin\ResourcesController@index'
        );

        $router->any(
            'admin/resources/create',
            'Anomaly\Streams\Addon\Module\Resources\Http\Controller\Admin\ResourcesController@create'
        );

        $router->any(
            'admin/resources/edit/{id}',
            'Anomaly\Streams\Addon\Module\Resources\Http\Controller\Admin\ResourcesController@edit'
        );
    }
}
