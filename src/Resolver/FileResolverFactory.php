<?php

namespace Reliv\Mustache\Resolver;

use Psr\Container\ContainerInterface;
use Reliv\CacheRat\Service\Cache;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class FileResolverFactory
{
    /**
     * @param ContainerInterface $serviceContainer
     *
     * @return FileResolver
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $serviceContainer)
    {
        return new FileResolver(
            $serviceContainer->get(Cache::class),
            FileResolver::DEFAULT_CACHE_KEY
        );
    }
}
