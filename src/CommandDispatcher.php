<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 17:22
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

/**
 * Class CommandDispatcher
 * @package Zellien\CommandDispatcher
 */
final class CommandDispatcher implements CommandDispatcherInterface {

    /**
     * @var HandlerResolverInterface
     */
    private $resolver;

    /**
     * CommandDispatcher constructor.
     * @param HandlerResolverInterface $resolver
     */
    public function __construct(HandlerResolverInterface $resolver) {
        $this->resolver = $resolver;
    }

    /**
     * @inheritDoc
     */
    public function dispatch(CommandInterface $command) {
        $handler = $this->resolver->resolve($command);
        return $handler->handle($command);
    }

}
