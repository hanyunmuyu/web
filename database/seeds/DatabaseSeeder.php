<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClubCategorySeeder::class);
        $this->call(ClubSeeder::class);
        $this->call(SchoolDepartmentSeeder::class);
        $this->call(SchoolNewsSeeder::class);
        $this->call(UserMessageSeeder::class);
        $this->call(SchoolRecommendSeeder::class);
        $this->call(SchoolPlayerSeeder::class);
    }
}
