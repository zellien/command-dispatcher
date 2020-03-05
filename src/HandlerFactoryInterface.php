<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 17:36
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

use Psr\Container\ContainerInterface;

/**
 * Interface HandlerFactoryInterface
 * @package Zellien\CommandDispatcher
 */
interface HandlerFactoryInterface {

    /**
     * @param ContainerInterface $container
     * @return HandlerInterface
     */
    public function __invoke(ContainerInterface $container): HandlerInterface;

}
