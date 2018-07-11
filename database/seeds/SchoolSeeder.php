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
            \App\Models\SchoolModel::create([
                'school_name' => '河南工业大学-' . $i,
                'school_logo' => '/uploads/logo/94a400fd0f898bc2d85f8443134e2c1a5.jpg',
                'school_description' => str_repeat('河南工业大学', $i % 9),
                'favorite_number' => $i + 100,
                'club_number' => $i + 1,
            ]);
        }
    }
}
