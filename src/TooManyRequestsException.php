<?php declare(strict_types=1);

namespace Http\Exception;

use JetBrains\PhpStorm\Pure;
use Psr\Http\Message\RequestInterface;

class TooManyRequestsException extends RequestException implements WithHeaderInterface
{
    public const STATUS_CODE = 429;

    #[Pure] public function __construct(
        protected RequestInterface $request,
        private readonly int       $retryAfter
    )
    {
        parent::__construct($request);
    }

    public function withHeader(): string
    {
        return sprintf("Retry-After: %d", $this->retryAfter);
    }
}
