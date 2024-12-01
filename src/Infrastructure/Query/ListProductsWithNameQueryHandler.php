<?php

declare(strict_types=1);

namespace App\Infrastructure\Query;

use App\Infrastructure\Adapter\ProductAdapterInterface;
use App\Infrastructure\ReadModel\Product;

final readonly class ListProductsWithNameQueryHandler
{
    public function __construct(
        private ProductAdapterInterface $productAdapter
    ) {}

    /**
     * @return Product[]
     */
    public function __invoke(ListProductsWithNameQuery $query): array
    {
        return $this->productAdapter->getProductsWithName(
            $query->name,
            $query->itemPerPage,
            $query->page
        );
    }
}