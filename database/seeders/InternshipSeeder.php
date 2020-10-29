<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Internship::factory()->count(25)->create();
        \DB::table('internships')->insert(
            [
                'title' => "Full Stack Developer",
                'description' => "We are searching for talented software engineering interns who have experience with web development. Ideally, candidates should have experience with our technologies: React, Redux, python, Node, Typescript. Since we are such a small company, interns must be able to build new features independently and be proactive about their own learning.",
                'category_id' => 2,
                'skills_id' => 4,
                'internshipPeriod_id' => 3,
                'company_id' => 3,
                'availability' => 1
            ]);

        \DB::table('internships')->insert(
            [
                'title' => "UX/ UI Designer",
                'description' => "Capgemini is looking for UX/ UI Intern, we are seeking a passionate, opinionated and creative individual who can design web applications from the ground up. The successful candidate will be a designer who understands web strengths and constraints, and builds pixel perfect solutions.",
                'category_id' => 1,
                'skills_id' => 26,
                'internshipPeriod_id' => 2,
                'company_id' => 1,
                'availability' => 1
            ]);

        \DB::table('internships')->insert(
            [
                'title' => "Hybrid",
                'description' => "Front-End Development/Designer",
                'category_id' => 3,
                'skills_id' => 6,
                'internshipPeriod_id' => 1,
                'company_id' => 2,
                'availability' => 0
            ]);
    }
}
