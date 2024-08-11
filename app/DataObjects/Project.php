<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class Project extends Data
{
    public function __construct(
        public string $title,
    )
    {
    }
}
