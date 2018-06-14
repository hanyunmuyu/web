<?php

use Illuminate\Database\Seeder;

class ClubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            '体育',
            '绘画',
            '设计',
            '编程',
            '足球',
            '篮球',
        ];
        foreach ($categories as $category) {
            \Illuminate\Support\Facades\DB::table('club_category')
                ->insert([
                    'category_name' => $category
                ]);
        }
    }
}
