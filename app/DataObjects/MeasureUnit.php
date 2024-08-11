<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class MeasureUnit extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
