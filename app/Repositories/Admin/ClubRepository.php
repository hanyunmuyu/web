<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15
 * Time: 16:21
 */

namespace App\Repositories\Admin;


use App\Models\ClubModel;

class ClubRepository
{
    public function getClubList()
    {
        return ClubModel::leftjoin('school', 'school.id', '=', 'club.school_id')
            ->select('club.*', 'school.school_name')
            ->orderby('club.id', 'desc')
            ->paginate(20);
    }

    public function dealClub($id, $status)
    {
        return ClubModel::where('id', $id)->update(['status' => $status]);
    }
}