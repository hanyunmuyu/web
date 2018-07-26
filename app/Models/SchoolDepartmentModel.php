<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolDepartmentModel extends Model
{
    //
    protected $table = 'school_department';
    protected $fillable = [
        'school_id',
        'department_name',
        'department_logo',
        'create_user_id',
        'status',
    ];
}
