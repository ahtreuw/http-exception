<?php declare(strict_types=1);

namespace Http\Exception;

use JetBrains\PhpStorm\Pure;
use Psr\Http\Message\RequestInterface;

class SeeOtherException extends RequestException implements WithHeaderInterface
{
    public const STATUS_CODE = 303;

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
