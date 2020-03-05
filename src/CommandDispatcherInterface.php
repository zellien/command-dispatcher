<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 16:47
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

/**
 * Interface CommandDispatcherInterface
 * @package Zellien\CommandDispatcher
 */
interface CommandDispatcherInterface {

    /**
     * Handles a command using a handler
     * @param CommandInterface $command
     * @return mixed
     */
    public function dispatch(CommandInterface $command);

}
