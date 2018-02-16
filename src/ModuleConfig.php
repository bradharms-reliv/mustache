<?php

namespace Reliv\Mustache;

use Reliv\Mustache\Resolver\FileResolver;
use Reliv\Mustache\Resolver\FileResolverFactory;
use Reliv\Mustache\Resolver\StringResolver;
use Reliv\Mustache\Resolver\StringResolverFactory;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => [
                'config_factories' => [
                    FileResolver::class => [
                        'factory' => FileResolverFactory::class,
                    ],
                    StringResolver::class => [
                        'factory' => StringResolverFactory::class,
                    ],
                ],
            ],
        ];
    }
}
