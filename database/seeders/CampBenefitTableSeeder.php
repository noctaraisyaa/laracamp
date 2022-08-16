<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp_benefit = [
            [
                'camps_id' => 1,
                'nama' => 'Pro Techstack Kit',
            ],
            [
                'camps_id' => 1,
                'nama' => 'iMac Pro 2021 Display'
            ],
            [
                'camps_id' => 1,
                'nama' => '3-1 Monitoring Program'
            ],
            [
                'camps_id' => 1,
                'nama' => 'Final Project Certificate'
            ],
            [
                'camps_id' => 2,
                'nama' => 'Pro Techstack Kit',
            ],
            [
                'camps_id' => 2,
                'nama' => 'iMac Pro 2021 Display'
            ],
            [
                'camps_id' => 2,
                'nama' => '10-1 Monitoring Program'
            ],
        ];
        foreach($camp_benefit  as $key => $camp){
            CampBenefit::create($camp);
        }
    }
}
