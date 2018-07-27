<?php

use Illuminate\Database\Seeder;

class SchoolNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 100; $i++) {
            $data = [];
            $data['school_id'] = $i + 1;
            $data['image_list'] = '1,2';
            $data['title'] = '新闻标题';
            $data['content'] = '新闻标题新闻标题新闻标题';
            \App\Models\SchoolNewsModel::create($data);
        }
    }
}
