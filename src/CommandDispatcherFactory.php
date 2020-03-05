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
        $factories = $config['command_dispatcher']['factories'] ?? [];
        $resolver = new HandlerResolver();
        foreach ($factories as $commandName => $factory) {
            // If invokable factory
            if ($factory instanceof HandlerFactoryInterface) {
                $factory = new $factory();
            }
            // Attach handler
            if (is_callable($factory)) {
                $handler = call_user_func($factory, $container);
                $resolver->attach($commandName, $handler);
            }
        }
        return new CommandDispatcher($resolver);
    }

}
