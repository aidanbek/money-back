<?php

namespace App\Enums;

enum AccountTypeEnum: int
{
    case CARD = 1;
    case CASH = 2;
    case BANK_ACCOUNT = 3;
    case CREDIT = 4;
}
