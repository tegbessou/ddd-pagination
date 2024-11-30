<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\ProductId;
use App\Domain\ValueObject\ProductName;
use App\Domain\ValueObject\ProductPrice;

final class Product
{
    public function __construct(
        private ProductId $id,
        private ProductName $name,
        private ProductPrice $price,
    ) {}

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