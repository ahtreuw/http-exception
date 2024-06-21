<?php declare(strict_types=1);

namespace Http\Exception;

class ForbiddenException extends RequestException
{
    public const STATUS_CODE = 403;
}
