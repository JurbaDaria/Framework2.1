<?php

namespace Container4RXsmzA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyInfo_PhpstanExtractorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'property_info.phpstan_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/PhpStanExtractor.php';

        return $container->privates['property_info.phpstan_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor();
    }
}
