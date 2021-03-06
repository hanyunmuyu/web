<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 16:47
 */

namespace App\Repositories\Api\v1;


use App\Models\ClubCategoryModel;
use App\Models\ClubModel;
use App\Models\ClubUserModel;

class ClubRepository
{
    public function getClubList()
    {
        return ClubModel::orderby('id', 'desc')->paginate(16);
    }

    public function getClubCategory()
    {
        return ClubCategoryModel::all();
    }

    public function getClubByName($name, $school_id)
    {
        return ClubModel::where('club_name', $name)
            ->where('school_id', $school_id)
            ->first();
    }

    public function createClub($user_id, $school_id, $name, $club_logo,$description, $category)
    {
        return ClubModel::create([
            'create_user_id' => $user_id,
            'school_id' => $school_id,
            'club_name' => $name,
            'club_logo' => $club_logo,
            'club_description' => $description,
            'category_ids' => $category
        ]);
    }

    public function getClubById($clubId)
    {
        return ClubModel::where('id', $clubId)->first();
    }

    public function getMemberList($clubId)
    {
        return ClubUserModel::leftjoin('users', 'users.id', '=', 'club_user.user_id')
            ->where('club_user.club_id',$clubId)
            ->paginate(16);
    }
}