<?php namespace Anomaly\Streams\Addon\Module\Resources;

use Illuminate\Support\ServiceProvider;

/**
 * Class ResourcesModuleServiceProvider
 */
class ResourcesModuleServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Anomaly\Streams\Addon\Module\Resources\Provider\RouteServiceProvider');
        $this->app->register('Anomaly\Streams\Addon\Module\Resources\Provider\ListenerServiceProvider');
        $this->app->register('Anomaly\Streams\Addon\Module\Resources\Provider\InterfaceServiceProvider');
    }
}
