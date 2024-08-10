<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class OperationCreate extends Data
{
    public function __construct(
        public string $account,
        public string $payee,
        public float $total,
        public bool $online,

    )
    {
    }
}
