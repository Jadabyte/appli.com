<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InternshipPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\internshipPeriod::factory()->count(3)->create();
        \DB::table('internshipPeriods')->insert(
        [
            'title' => "1st Semester"
        ],
        [
            'title' => "2nd Semester"
        ],
        [
            'title' => "Whole Year"
        ]);
    }
}
