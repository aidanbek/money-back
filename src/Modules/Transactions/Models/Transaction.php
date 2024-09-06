<?php

declare(strict_types=1);

namespace Modules\Transactions\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Transactions\Enums\TransactionType;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'account_id',
        'type',
        'amount',
        'comment',
    ];

    protected $appends = [
        'type_title',
    ];

    public function getTypeTitleAttribute(): string
    {
        return TransactionType::from($this->type)->title();
    }
}
