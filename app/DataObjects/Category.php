<?php

namespace App\DataObjects;

use App\Enums\CategoryTypeEnum;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class Category extends Data
{
    public function __construct(
        public string $title,
        #[WithCast(EnumCast::class)]
        #[MapInputName('type_id')]
        public CategoryTypeEnum $typeId,
    )
    {
    }
}
