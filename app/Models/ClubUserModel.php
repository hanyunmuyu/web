<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubUserModel extends Model
{
    //
    protected $table = 'club_user';
    protected $fillable = [
        'club_id',
        'user_id',

    ];
}
