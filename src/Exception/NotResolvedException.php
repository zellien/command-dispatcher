<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 04.03.2020 19:52
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher\Exception;

use OutOfBoundsException as BaseException;

/**
 * Class NotResolvedException
 * @package Zellien\CommandDispatcher\Exception
 */
class NotResolvedException extends BaseException implements ExceptionInterface {

}
