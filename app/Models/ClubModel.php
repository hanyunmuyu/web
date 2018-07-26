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
        'club_name',
        'club_description',
        'category_ids',
        'club_logo',
        'create_user_id',
    ];
}
