<?php

use Illuminate\Database\Seeder;

class UserMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 100; $i++) {
            $data = [];
            $data['user_id'] = 1;
            $data['title'] = '消息的标题';
            $data['source'] = $i % 2 == 0 ? 'school' : 'club';
            $data['source_id'] = $i;
            \App\Models\UserMessageModel::create($data);
        }
    }
}
