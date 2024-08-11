<?php

namespace App\DataObjects;

use Carbon\CarbonImmutable;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class OperationCreate extends Data
{
    /**
     * @param Account $account
     * @param Payee $payee
     * @param bool $online
     * @param CarbonImmutable $happenedAt
     * @param array<array-key, ProductItem> $products
     */
    public function __construct(
        public Account $account,
        public Payee $payee,
        public bool $online,
        #[MapInputName('happened_at')]
        public CarbonImmutable $happenedAt,
        public array $products,
    )
    {
    }
}
