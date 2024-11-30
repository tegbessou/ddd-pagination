<?php

declare(strict_types=1);

namespace App\Infrastructure\Dto;

final readonly class PaginatedProduct
{
    public function __construct(
        public array $products,
        public int $total,
        public int $page,
    ) {}
}