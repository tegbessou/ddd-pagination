<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\Event\ProductCreated;
use App\Domain\ValueObject\ProductId;
use App\Domain\ValueObject\ProductName;
use App\Domain\ValueObject\ProductPrice;

final class Product extends Aggregate
{
    public function __construct(
        private ProductId $id,
        private ProductName $name,
        private ProductPrice $price,
    ) {
    }

    public function create(
        ProductId $id,
        ProductName $name,
        ProductPrice $price,
    ): self {
        $product =  new self(
            $id,
            $name,
            $price,
        );

        $this->record(new ProductCreated(
            $id->value(),
            $name->value(),
            $price->value(),
        ));

        return $product;
    }

    public function id(): ProductId
    {
        return $this->id;
    }

    public function name(): ProductName
    {
        return $this->name;
    }

    public function price(): ProductPrice
    {
        return $this->price;
    }
}