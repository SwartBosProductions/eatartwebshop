<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Role extends Model
{

    use SoftDeletes, Userstamps;

    /**
     * The attributes that are mass assignable.
     * BOSMA NOTES:
     * I think this should do.
     * :BOSMA NOTES
     *
     * @var array
     */
    protected $fillable = [
        'rolename',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
