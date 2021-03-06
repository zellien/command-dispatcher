<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 16:34
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

interface HandlerInterface {

    /**
     * Handles the received command
     * @param CommandInterface $command
     * @return mixed|void
     */
    public function handle(CommandInterface $command);

}
