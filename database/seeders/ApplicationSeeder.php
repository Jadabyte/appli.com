<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('applications')->insert(
            [
                'student_id'=> 1,
                'internship_id' => 1
            ]);
            
        \DB::table('applications')->insert(
            [
                'student_id'=> 2,
                'internship_id' => 2
            ]);

    }
}
