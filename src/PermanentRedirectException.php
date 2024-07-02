<?php declare(strict_types=1);

namespace Http\Exception;

use JetBrains\PhpStorm\Pure;
use Psr\Http\Message\RequestInterface;

class PermanentRedirectException extends RequestException implements WithHeaderInterface
{
    public const STATUS_CODE = 308;

    #[Pure] public function __construct(
        protected RequestInterface $request,
        private readonly string    $location
    )
    {
        parent::__construct($request);
    }

    public function withHeader(): string
    {
        return sprintf("Location: %s", $this->location);
    }
}
