<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 16:37
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

/**
 * Interface HandlerResolverInterface
 * @package Zellien\CommandDispatcher
 */
interface HandlerResolverInterface {

    /**
     * Returns a handler that is bound to a command
     * @param CommandInterface $command
     * @return HandlerInterface
     */
    public function resolve(CommandInterface $command): HandlerInterface;

}
