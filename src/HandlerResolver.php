<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 16:50
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

use Zellien\CommandDispatcher\Exception\AlreadyExistsException;
use Zellien\CommandDispatcher\Exception\NotResolvedException;

/**
 * Class HandlerResolver
 * @package Zellien\CommandDispatcher
 */
final class HandlerResolver implements HandlerResolverInterface {

    /**
     * @var array
     */
    private $map = [];

    /**
     * HandlerResolver constructor.
     * @param array $map
     */
    public function __construct(array $map = []) {
        foreach ($map as $commandName => $handler) {
            $this->attach($commandName, $handler);
        }
    }

    /**
     * Resolves a handler for a command
     * @param CommandInterface $command
     * @return HandlerInterface
     */
    public function resolve(CommandInterface $command): HandlerInterface {
        $commandName = get_class($command);
        if (!$this->exists($commandName)) {
            throw new NotResolvedException(sprintf('Command handler for %s not resolved', $commandName));
        }
        return $this->map[$commandName];
    }

    /**
     * Checks if a handler is attached to a command
     * @param string $commandName
     * @return bool
     */
    public function exists(string $commandName): bool {
        return isset($this->map[$commandName]);
    }

    /**
     * Attach a handler to the command
     * @param string           $commandName
     * @param HandlerInterface $handler
     * @return $this
     */
    public function attach(string $commandName, HandlerInterface $handler): self {
        if ($this->exists($commandName)) {
            throw new AlreadyExistsException(sprintf('Command handler for %s is already attached', $commandName));
        }
        $this->map[$commandName] = $handler;
        return $this;
    }

}
