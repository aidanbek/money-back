<?php

namespace App\DataObjects;

use App\Enums\AccountTypeEnum;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class Account extends Data
{
    public function __construct(
        public string          $title,
        #[WithCast(EnumCast::class)]
        #[MapInputName('type_id')]
        public AccountTypeEnum $typeId,
    )
    {
    }
}
