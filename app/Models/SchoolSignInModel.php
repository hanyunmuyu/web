<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSignInModel extends Model
{
    //
    protected $table = 'school_sign_in';
    protected $fillable = [
        'school_id',
        'user_id',
    ];
}
