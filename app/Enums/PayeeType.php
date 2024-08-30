<?php

namespace App\Enums;

enum PayeeType: int
{
    case SHOP = 1;
    case PERSON = 2;
    case BANK = 3;
}
