<?php declare(strict_types=1);

namespace Http\Exception;

class UnprocessableContentException extends RequestException
{
    public const STATUS_CODE = 422;
}
