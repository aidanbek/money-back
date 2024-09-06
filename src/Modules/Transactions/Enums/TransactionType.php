<?php

declare(strict_types=1);

namespace Modules\Transactions\Enums;

enum TransactionType: int
{
    case EXPENSE = 1;
    case INCOME = 2;
    case TRANSFER = 3;

    public function title(): string
    {
        return match($this) {
            self::EXPENSE => 'Расход',
            self::INCOME => 'Доход',
            self::TRANSFER => 'Перевод',
        };
    }
}
