<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;
use Illuminate\Support\Carbon;

class Sale extends Model
{
    use SoftDeletes, Userstamps;
    /**
     *
     * @var array
     */
    protected $fillable = [
        'sale_name',
        'start_sale',
        'end_sale',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
