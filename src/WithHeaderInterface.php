<?php declare(strict_types=1);

namespace Http\Exception;

interface WithHeaderInterface
{
    public function withHeader(): string;
}
