<?php

namespace ContainerC5HxbEx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['.debug.security.voter.security.access.authenticated_voter'])) {
            return $container->privates['.debug.security.voter.security.access.authenticated_voter'];
        }

        return $container->privates['.debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($container->privates['security.access.authenticated_voter'] ?? $container->load('getSecurity_Access_AuthenticatedVoterService')), $a);
    }
}
