<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $camps = [
            [
                'title' => 'Camp 1',
                'slug' => 'camp-1',
                'price' => 299
            ],
            [
                'title' => 'Camp 2',
                'slug' => 'camp-2',
                'price' => 399
            ]
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
