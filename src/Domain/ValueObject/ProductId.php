<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

use App\Infrastructure\Assert;

class ProductId
{
    public string $id;

    public function __construct(string $id)
    {
        Assert::uuid($id);

        $this->id = $id;
    }
}