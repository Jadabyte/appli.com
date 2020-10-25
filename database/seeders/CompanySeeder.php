<?php
use \Illuminate\Support\Facades\DB;
namespace Database\Seeders;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory()->count(20)->create();
    }
}
