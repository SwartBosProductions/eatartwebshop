<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Product extends Model
{
    use SoftDeletes, Userstamps;
    /**
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'serie_name',
        'picture',
        'description',
        'price',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
