<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Product;
use App\Domain\ValueObject\ProductName;

interface ProductRepository
{
    /**
     * @return Product[]
     */
    public function getProductsWithName(ProductName $name, int $itemPerPage, int $page): array;
}