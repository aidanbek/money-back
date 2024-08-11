<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class Category extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
