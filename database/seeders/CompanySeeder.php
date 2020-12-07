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
        //\App\Models\Company::factory()->count(10)->create();

        \DB::table('companies')->insert(
            [
                'user_id'=> 19,
                'name' => "Capgemini N.V./S.A.",
                'logo' => "",
                'category_id' => 1,
                'street' => "Bessenveldstraat",
                'houseNumber' => 19,
                'pobox' => 0,
                'postalCode' => 1831,
                'city'=> "Machelen",
                'mail'=> "delilah91@example.org",
                'telephone'=>"+32 27 08 11 11",
                'description'=>"Capgemini is a global leader in consulting, digital transformation, technology and engineering  services. The Group is at the forefront of innovation to address the entire breadth of clients’ opportunities in the evolving world of cloud, digital and platforms. Building on its strong 50-year+ heritage and deep industry-specific expertise, Capgemini enables organizations to realize their business ambitions through an array of services from strategy to operations. Capgemini is driven by the conviction that the business value of technology comes from and through people. Today, it is a multicultural company of 270,000 team members in almost 50 countries. With Altran, the Group reported 2019 combined revenues of €17billion.",
                'LinkedIn'=>"https://www.linkedin.com/com",
                'website'=>"https://www.capgemini.com/be-en/"
            ]);

            \DB::table('companies')->insert(
                [
                    'user_id'=> 3,
                    'name' => "Intracto",
                    'logo' => "",
                    'category_id' => 3,
                    'street' => "Zavelheide",
                    'houseNumber' => 15,
                    'pobox' => 0,
                    'postalCode' => 2200,
                    'city'=> "Herentals",
                    'mail'=> "xrice@example.com",
                    'telephone'=>"0800 90 200",
                    'description'=>"As a digital agency, Intracto is shaping tomorrow's businesses in the areas of marketing, strategy, communication and technology. Our campuses in Belgium and the Netherlands are bursting with talent to take challenging projects to the next level.",
                    'LinkedIn'=>"https://be.linkedin.com/company/intracto-group",
                    'website'=>"https://www.intracto.com/en-be"
                ]);

                \DB::table('companies')->insert(
                    [
                        'user_id'=> 7,
                        'name' => "Anvil",
                        'logo' => "",
                        'category_id' => 2,
                        'street' => "Veldkant",
                        'houseNumber' => 35,
                        'pobox' => 0,
                        'postalCode' => 2550,
                        'city'=> "Kontich",
                        'mail'=> "hello@anvil.be",
                        'telephone'=>"+32 477 38 51 42",
                        'description'=>"Anvil specializes in website development using the best Content Management Systems (CMS) and frameworks. In a CMS we build your website in which all texts and images are adaptable or translatable by the administrators. We use a framework to build a customized solution on a secure, powerful underlying platform that is 100% tailored to your needs.",
                        'LinkedIn'=>"https://www.linkedin.com/company/anvil-be/",
                        'website'=>"https://anvil.be/en"
                    ]);
    }
}
