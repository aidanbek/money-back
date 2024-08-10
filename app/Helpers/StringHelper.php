<?php

namespace App\Helpers;

use Illuminate\Support\Str;

readonly final class StringHelper
{
    public static function clearTitle(string $value): string
    {
        return Str::lower(Str::replaceMatches('/[^a-z\d ]/i', '', $value));
    }
}
