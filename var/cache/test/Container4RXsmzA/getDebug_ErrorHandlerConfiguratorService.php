<?php

namespace Container4RXsmzA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ErrorHandlerConfiguratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'debug.error_handler_configurator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/ErrorHandlerConfigurator.php';

        return $container->services['debug.error_handler_configurator'] = new \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator(($container->privates['monolog.logger.php'] ?? $container->load('getMonolog_Logger_PhpService')), NULL, -1, true, true, ($container->services['monolog.logger.deprecation'] ?? $container->load('getMonolog_Logger_DeprecationService')));
    }
}
