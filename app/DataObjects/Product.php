<?php

namespace App\DataObjects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class Product extends Data
{
    public function __construct(
        public string      $title,
        public string      $code,
        public Brand       $brand,
        #[MapInputName('measure_unit')]
        public MeasureUnit $measureUnit,
    )
    {
    }
}
