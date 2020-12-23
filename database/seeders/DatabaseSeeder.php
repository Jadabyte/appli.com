<?php

namespace Database\Seeders;

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
        $this->call(CompanySeeder::class);
        $this->call(InternshipPeriodSeeder::class);
        $this->call(InternshipSeeder::class);
        //$this->call(ReviewSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ApplicationSeeder::class);
    }
}
