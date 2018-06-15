<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2018/6/12
 * Time: 21:13
 */

namespace App\Repositories\Home;


use App\Models\ClubCategoryModel;

class ClubCategoryRepository
{
    public function getClubCategories($limit=6)
    {
        return ClubCategoryModel::orderby('id','desc')->limit($limit)->get();
    }
}