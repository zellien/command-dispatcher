<?php
/**
 * Created by Bogdan Tereshchenko <development.sites@gmail.com>
 * Copyright: 2006-2019 Bogdan Tereshchenko
 * Link: https://zelliengroup.com/
 * Date: 05.03.2020 17:09
 */

declare(strict_types=1);

namespace Zellien\CommandDispatcher\Exception;

use RuntimeException as BaseException;

/**
 * Class AlreadyExistsException
 * @package Zellien\CommandDispatcher\Exception
 */
class AlreadyExistsException extends BaseException implements ExceptionInterface {

}
