<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('users')
                ->insert([
                    'name' => str_random(6),
                    'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                ]);
        }
    }
}
