<?php

declare(strict_types=1);

namespace App\Infrastructure\Query;

use App\Domain\Entity\Product;
use App\Domain\Repository\ProductRepository;
use App\Domain\ValueObject\ProductName;

final readonly class ListProductsWithNameQueryHandler
{
    public function __construct(
        private ProductRepository $productRepository
    ) {}

    /**
     * @return Product[]
     */
    public function __invoke(ListProductsWithNameQuery $query): array
    {
        return $this->productRepository->getProductsWithName(
            ProductName::fromString($query->name),
            $query->itemPerPage,
            $query->page
        );
    }
}