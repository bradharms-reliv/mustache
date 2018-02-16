<?php

namespace Reliv\Mustache\Resolver;

use Psr\Container\ContainerInterface;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class StringResolverFactory
{
    /**
     * @param ContainerInterface $serviceContainer
     *
     * @return StringResolver
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $serviceContainer)
    {
        return new StringResolver();
    }
}
