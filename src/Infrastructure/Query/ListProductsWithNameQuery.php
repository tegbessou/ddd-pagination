<?php

declare(strict_types=1);

namespace App\Infrastructure\Query;

final readonly class ListProductsWithNameQuery
{
    public function __construct(
        public string $name,
        public int $itemPerPage,
        public int $page,
    ) {
    }
}