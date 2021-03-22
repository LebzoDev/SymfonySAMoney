<?php

namespace ContainerRqBBiKc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.eager_loading' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/EagerLoadingExtension.php';

        return $container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension(($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), 30, true, NULL, NULL, false, ($container->privates['serializer.mapping.cache_class_metadata_factory'] ?? $container->getSerializer_Mapping_CacheClassMetadataFactoryService()));
    }
}
