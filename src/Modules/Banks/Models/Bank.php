<?php

declare(strict_types=1);

namespace Modules\Banks\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';

    protected $fillable = [
        'name',
        'icon_url',
    ];
}
