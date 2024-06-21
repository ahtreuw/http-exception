<?php declare(strict_types=1);

namespace Http\Exception;

class ProxyAuthenticationRequiredException extends RequestException
{
    public const STATUS_CODE = 407;
}
