<?php

declare(strict_types=1);

namespace Modules\Accounts\Enums;

enum AccountType: int
{
    case CARD = 1;
    case CASH = 2;
    case ACCOUNT = 3;
    case CREDIT = 4;

    public function title()
    {
        return match ($this) {
            self::CARD => 'Наличные',
            self::CASH => 'Карта',
            self::ACCOUNT => 'Счет',
            self::CREDIT => 'Кредит',
        };
    }
}
