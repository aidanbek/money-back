<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class Brand extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
