<?php

namespace App\Enums;

enum CategoryTypeEnum: int
{
    case EXPENSE = 1;
    case INCOME = 2;
    case EXPENSE_AND_INCOME = 3;
}
