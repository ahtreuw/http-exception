<?php declare(strict_types=1);

namespace Http\Exception;

use Exception;
use JetBrains\PhpStorm\Pure;
use Psr\Http\Message\RequestInterface;
use Throwable;

abstract class RequestException extends Exception implements HttpExceptionInterface
{
    public const STATUS_CODE = 400;


    #[Pure] public function __construct(
        protected RequestInterface $request,
        null|string                $message = null,
        null|Throwable             $previous = null
    )
    {
        parent::__construct(
            $message ?? self::PHRASES[static::STATUS_CODE],
            static::STATUS_CODE,
            $previous
        );
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }
}
