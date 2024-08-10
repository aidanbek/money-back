<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operation extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $primaryKey = 'uuid';
}
