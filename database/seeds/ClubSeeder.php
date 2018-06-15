<?php

use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories=\App\Models\ClubCategoryModel::all();
        $arr = [];
        foreach ($categories as $category) {
            $arr[] = $category->id;
        }
        $users = \App\User::all();
        foreach ($users as $user) {
            $str=join(',',array_random($arr, random_int(1, count($arr))));
            \App\Models\ClubModel::insert([
                'club_name' => '社团-' . $user->school_id . '-' . $user->id.'-'.time(),
                'school_id' => $user->school_id,
                'create_user_id'=>$user->id,
                'category_ids'=>$str
            ]);
        }
    }
}
