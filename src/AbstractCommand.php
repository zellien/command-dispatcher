<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 16:33
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher;

use Zellien\Message\AbstractMessage;

/**
 * Class AbstractCommand
 * @package Zellien\CommandDispatcher
 */
abstract class AbstractCommand extends AbstractMessage implements CommandInterface {

}
