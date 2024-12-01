<?php

declare(strict_types=1);

namespace App\Domain\Event;

final readonly class ProductCreated implements EventInterface
{
    public function __construct(
        public string $productId,
        public string $name,
        public float $price,
    ) {}
}