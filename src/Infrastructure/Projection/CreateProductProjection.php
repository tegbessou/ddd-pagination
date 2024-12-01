<?php

declare(strict_types=1);

namespace App\Infrastructure\Projection;

use App\Domain\Event\ProductCreated;
use App\Infrastructure\Adapter\ProductAdapterInterface;
use App\Infrastructure\ReadModel\Product;

final readonly class CreateProductProjection
{
    public function __construct(
        private ProductAdapterInterface $productAdapter,
    ) {
    }

    public function __invoke(ProductCreated $event): void
    {
        $product = new Product(
            $event->productId,
            $event->name,
            $event->price,
        );

        $this->productAdapter->add($product);
    }
}