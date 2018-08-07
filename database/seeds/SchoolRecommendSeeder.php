<?php

use Illuminate\Database\Seeder;

class SchoolRecommendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($a = 0; $a < 100; $a++) {
            $data = [];
            $data['title'] = "我是标题";
            $data['description'] = '我是描述的蚊子，我是描述的蚊子我是描述的蚊子我是描述的蚊子我是描述的蚊子我是描述的蚊子我是描述的蚊子我是描述的蚊子我是描述的蚊子';
            $data['source'] = $a % 2 == 0 ? 'school' : 'club';
            $data['source_id'] = $a + 1;
            $data['image_list'] = $a % 3 == 0 ? '1,2,3' : null;
            \App\Models\SchoolRecommendModel::create($data);
        }
    }
}
