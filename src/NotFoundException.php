<?php declare(strict_types=1);

namespace Http\Exception;

class NotFoundException extends RequestException
{
    public const STATUS_CODE = 404;
}
