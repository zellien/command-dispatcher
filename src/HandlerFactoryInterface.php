<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 17:36
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

use Interop\Container\ContainerInterface;

/**
 * Interface HandlerFactoryInterface
 * @package Zellien\CommandDispatcher
 */
interface HandlerFactoryInterface {

    /**
     * Create an object
     *
     * @param ContainerInterface $container
     * @param string             $requestedName
     * @param null|array         $options
     * @return HandlerInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): HandlerInterface;

}
