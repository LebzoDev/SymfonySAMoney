<?php

namespace ContainerYdqXUS9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_JwtManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'lexik_jwt_authentication.jwt_manager' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['lexik_jwt_authentication.jwt_manager'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager(($container->services['lexik_jwt_authentication.encoder'] ?? $container->load('getLexikJwtAuthentication_EncoderService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 'username');

        $instance->setUserIdentityField('username');

        return $instance;
    }
}
