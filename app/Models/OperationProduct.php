<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $operation_id
 * @property int $product_id
 * @property int $category_id
 * @property int|null $project_id
 * @property int $quantity
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereOperationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OperationProduct extends Model
{
    use HasFactory;

    protected $guarded = [];
}
