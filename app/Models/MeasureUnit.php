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
 * @property string|null $comment
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereCleanTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeasureUnit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MeasureUnit extends Model
{
    use HasFactory;

    protected $guarded = [];
}
