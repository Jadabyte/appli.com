<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class internshipsSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\internshipsSkill::factory()->count(20)->create();
    }
}
