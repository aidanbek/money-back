<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property string $id
 * @property int $account_id
 * @property int $payee_id
 * @property int $type
 * @property int $sort_order
 * @property string $total
 * @property int $online
 * @property string $happened_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|Operation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereHappenedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation wherePayeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation withoutTrashed()
 * @mixin \Eloquent
 */
class Operation extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public $incrementing = false;

    protected $keyType = 'string';

    protected $primaryKey = 'id';
}
