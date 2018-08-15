<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolModel extends Model
{
    //
    protected $table = 'school';
    protected $fillable = [
        'school_name',
        'school_logo',
        'school_description',

    ];
}
