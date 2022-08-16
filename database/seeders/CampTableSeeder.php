<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camps;
use Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Kelas Belajar',
                'slug' => 'kelas-belajar',
                'price' => 280,
            ],
            [
                'title' => 'Kelas Mahir',
                'slug' => 'kelas-mahir',
                'price' => 140,
            ]
        ];

        foreach($camps as $key => $camp){
            Camps::create($camp);
        }
    }
}
