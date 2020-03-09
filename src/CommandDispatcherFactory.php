<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 17:44
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

use Psr\Container\ContainerInterface;

/**
 * Class CommandDispatcherFactory
 * @package Zellien\CommandDispatcher
 */
final class CommandDispatcherFactory {

    /**
     * @param ContainerInterface $container
     * @return CommandDispatcherInterface
     */
    public function __invoke(ContainerInterface $container): CommandDispatcherInterface {
        $config = $container->get('config');
        $relations = $config['command_dispatcher']['relations'] ?? [];
        $factories = $config['command_dispatcher']['factories'] ?? [];
        $resolver = new HandlerResolver();
        foreach ($relations as $command => $handler) {
            if (is_string($handler) && class_exists($handler) && isset($factories[$handler])) {
                $factory = $factories[$handler];
                // If invokable factory
                if (is_a($factory, HandlerFactoryInterface::class, true)) {
                    $factory = new $factory();
                }
                // Attach handler
                if (is_callable($factory)) {
                    $handler = call_user_func($factory, $container);
                    $resolver->attach($command, $handler);
                }
            }
        }
        return new CommandDispatcher($resolver);
    }

}
