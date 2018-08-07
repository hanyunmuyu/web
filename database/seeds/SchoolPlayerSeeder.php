<?php

use Illuminate\Database\Seeder;

class SchoolPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 3; $i++) {
            $data = [];
            $data['title'] = '我是标题';
            $data['url'] = '';
            $data['image_id'] = $i + 1;
            \App\Models\SchoolPlayerModel::create($data);
        }
    }
}
