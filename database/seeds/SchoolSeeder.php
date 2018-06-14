<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 50; $i++) {
            \Illuminate\Support\Facades\DB::table('school')
                ->insert([
                    'school_name' => '河南工业大学-'.$i,
                    'school_description' => '河南工业大学'
                ]);
        }
    }
}
