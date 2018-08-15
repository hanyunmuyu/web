<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 16:38
 */

namespace App\Repositories\Admin;


use App\Models\SchoolModel;
use App\Models\SchoolNewsModel;

class SchoolRepository
{
    public function getSchoolList()
    {
        return SchoolModel::orderby('id', 'desc')->paginate(20);
    }

    public function createSchool($data)
    {
        return SchoolModel::create($data);
    }

    public function getSchoolByName($schoolName)
    {
        return SchoolModel::where('school_name', $schoolName)->first();
    }

    public function getSchoolNewsList()
    {
        return SchoolNewsModel::leftjoin('school', 'school_news.school_id', '=', 'school.id')
            ->select('school_news.*','school.school_name')
            ->orderby('school_news.id', 'desc')
            ->paginate(20);
    }

    public function deleteSchoolNews($id)
    {
        return SchoolNewsModel::where('id', $id)->delete();
    }

    public function updateSchoolNews($id, $data)
    {
        return SchoolNewsModel::where('id', $id)->update($data);
    }
    public function getSchoolNewsById($id)
    {
        return SchoolNewsModel::where('id', $id)->first();
    }
}