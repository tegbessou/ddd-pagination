<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final readonly class ProductPrice
{
    public function __construct(
        private float $value,
    ) {
    }

    public function value(): float
    {
        return $this->value;
    }
}