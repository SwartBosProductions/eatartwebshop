<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Wildside\Userstamps\Userstamps;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, Userstamps;

    /**
     * The attributes that are mass assignable.
     * BOSMA NOTES:
     * I added created_by etc as fillables, think that's what the docs want me to do.
     * :BOSMA NOTES
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'insertion',
        'last_name',
        'birthday',
        'email',
        'password',
        'street',
        'house_num',
        'house_num_addition',
        'postal_code',
        'city',
        'country',
        'created_by',
        'updated_by',
        'deleted_by',
        'usergroup_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
