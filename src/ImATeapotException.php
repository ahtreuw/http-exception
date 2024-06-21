<?php declare(strict_types=1);

namespace Http\Exception;

class ImATeapotException extends RequestException
{
    public const STATUS_CODE = 418;
}
