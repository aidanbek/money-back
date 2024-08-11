<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class Account extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
