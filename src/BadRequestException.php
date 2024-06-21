<?php declare(strict_types=1);

namespace Http\Exception;

class BadRequestException extends RequestException
{
    public const STATUS_CODE = 400;
}
