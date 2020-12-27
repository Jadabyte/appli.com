<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InternshipsSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\InternshipsSkill::factory()->count(20)->create();
    }
}
