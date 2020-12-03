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
            'title' => "First Semester"
        ]);

        \DB::table('internshipPeriods')->insert(
        [
            'title' => "Second Semester"
        ]);

        \DB::table('internshipPeriods')->insert(
        [
            'title' => "Entire Year"
        ]);
    }
}
