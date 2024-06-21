<?php declare(strict_types=1);

namespace Http\Exception;

class PaymentRequiredException extends RequestException
{
    public const STATUS_CODE = 402;
}
