<?php

namespace Modules\Accounts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Accounts\Enums\AccountType;

/**
 * @property string $title
 * @property string $clean_title
 * @property float $current_balance
 * @property float $initial_balance
 * @property int $type
 * @property string $type_title (generated)
 */
class Account extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'accounts';

    protected $fillable = [
        'title',
        'clean_title',
        'current_balance',
        'initial_balance',
        'type',
    ];

    protected $casts = [
        'current_balance' => 'float',
        'initial_balance' => 'float',
    ];

    protected $appends = [
        'type_title'
    ];

    public function getTypeTitleAttribute(): string
    {
        return AccountType::from($this->type)->title();
    }
}
