<?php declare(strict_types=1);

namespace Http\Exception;

class MethodNotAllowedException extends RequestException
{
    public const STATUS_CODE = 405;
}
