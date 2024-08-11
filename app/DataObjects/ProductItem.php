<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class ProductItem extends Data
{
    public function __construct(
        public Product $product,
        public Category $category,
        public int $quantity,
        public float $price,
        public ?Project $project = null,
    )
    {
    }
}
