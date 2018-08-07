<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolPlayerModel extends Model
{
    //
    protected $table = 'school_player';
    protected $fillable = [
        'title',
        'url',
        'image_id',
    ];
}
