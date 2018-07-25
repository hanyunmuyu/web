<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubModel extends Model
{
    //
    protected $table = 'club';
    protected $fillable = [
        'club_name',
        'school_id',
        'create_user_id',

    ];
}
