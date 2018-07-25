<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolUserModel extends Model
{
    //
    protected $table = 'school_user';
    protected $fillable = [
        'school_id',
        'user_id',
    ];
}
