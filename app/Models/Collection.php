<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Collection extends Model
{
    use SoftDeletes, Userstamps;
    /**
     *
     * @var array
     */
    protected $fillable = [
        'collection_name',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
