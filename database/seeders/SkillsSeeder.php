<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skills')->insert(
        [
            'title' => "Laravel"
        ]);

        \DB::table('skills')->insert(
        [
            'title' => "Javascript"
        ]);

        \DB::table('skills')->insert(
        [
            'title' => "Adobe XD"
        ]);

    }
}
