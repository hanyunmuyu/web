<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolRecommendModel extends Model
{
    //
    protected $table = 'school_recommend';
    protected $fillable = [
        'title',
        'description',
        'image_list',
        'source',
        'source_id',
        'status'

    ];
}
