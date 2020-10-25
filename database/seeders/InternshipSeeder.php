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
                'category' => "Development",
                'requirements' =>
                    "- Currently an undergrad majoring in Computer Science at a 4-year university
                    - Has contributed to a live website or web application
                    - Completed at least one production-level internship
                    - Interested in creative tools, social media, and entrepreneurship
                    - Comfortable with Javascript, React, and python
                    - Proactive: Identifies problems and solutions",
                'internshipPeriod_id' => 0,
                'company_id' => 4,
                'availability' => 1
            ]);

        \DB::table('internships')->insert(
            [
                'title' => "UX/ UI Designer",
                'description' => "Copart is looking for UX/ UI Intern, we are seeking a passionate, opinionated and creative individual who can design web applications from the ground up. The successful candidate will be a designer who understands web strengths and constraints, and builds pixel perfect solutions.",
                'category' => "Design",
                'requirements' =>
                    "- Develop well-structured web applications using modern, cutting edge JavaScript libraries/frameworks like ReactJS, ReactNative, Node.js etc.
                    - Work with UX designers and other developers to build modular, reusable components and compelling web applications.",
                'internshipPeriod_id' => 2,
                'company_id' => 4,
                'availability' => 1
            ]);

        \DB::table('internships')->insert(
            [
                'title' => "Hybrid",
                'description' => "Front-End Development/Designer",
                'category' => "Hybrid",
                'requirements' =>
                    "- CSS3, Html, JavaScript, NodeJS
                    - Sketch, Adobe Illustrator, Procreate",
                'internshipPeriod_id' => 1,
                'company_id' => 12,
                'availability' => 0
            ]);
    }
}
