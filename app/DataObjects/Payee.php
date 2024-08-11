<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class Payee extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
