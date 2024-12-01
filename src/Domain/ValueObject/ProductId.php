<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final readonly class ProductId
{
    public string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function value(): string
    {
        return $this->id;
    }
}