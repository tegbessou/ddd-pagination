<?php

namespace App\Infrastructure\Adapter;

use App\Infrastructure\ReadModel\Product;

interface ProductAdapterInterface
{
    public function add(Product $product): void;

    /**
     * @return Product[]
     */
    public function getProductsWithName(string $name, int $itemPerPage, int $page): array;
}