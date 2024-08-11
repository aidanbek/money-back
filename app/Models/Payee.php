<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $clean_title
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Payee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereCleanTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payee extends Model
{
    use HasFactory;

    protected $guarded = [];
}
