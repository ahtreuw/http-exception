<?php declare(strict_types=1);

namespace Http\Exception;

class UnauthorizedException extends RequestException
{
    public const STATUS_CODE = 401;
}
