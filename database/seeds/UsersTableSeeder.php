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
        $schoolList = \App\Models\SchoolModel::orderby(\Illuminate\Support\Facades\DB::raw('RAND()'))->get();
        foreach ($schoolList as $school) {
            for ($i = 0; $i < 2; $i++) {
                \Illuminate\Support\Facades\DB::table('users')
                    ->insert([
                        'name' => str_random(6),
                        'school_id' => $school->id,
                        'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                    ]);
            }
        }
    }
}
