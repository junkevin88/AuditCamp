<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //

        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Solution Template',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos',
            ],

            [
                'camp_id' => 2,
                'name' => 'Pro Solution Template',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 2,
                'name' => 'Future Job Opportunity',
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
