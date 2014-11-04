<?php namespace Anomaly\Streams\Addon\Module\Resources;

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

/**
 * Class ResourcesModuleInstaller
 */
class ResourcesModuleInstaller extends ModuleInstaller
{

    /**
     * Installers to run during module installation.
     *
     * @var array
     */
    protected $installers = [
        'Anomaly\Streams\Addon\Module\Resources\Installer\ResourcesInstaller',
    ];
}
