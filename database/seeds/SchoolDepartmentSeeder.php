<?php

use Illuminate\Database\Seeder;

class SchoolDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userList = \App\User::limit(50)->orderby(\Illuminate\Support\Facades\DB::raw('RAND()'))->get();
        foreach ($userList as $user) {
            $data['school_id'] = $user->school_id;
            $data['department_name'] = '我是学院-' . $user->school_id . '-' . str_random();
            $data['department_logo'] = '/uploads/2018-07-26/20180726154456227.jpg';
            $data['create_user_id'] = $user->id;
            \App\Models\SchoolDepartmentModel::create($data);
        }
    }
}
