<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'city_name' => 'An Giang',
                'zip_code' => '880000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'city_name' => 'Bà Rịa Vũng Tàu',
                'zip_code' => '790000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'city_name' => 'Bạc Liêu',
                'zip_code' => '260000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'city_name' => 'Bắc Kạn',
                'zip_code' => '960000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'city_name' => 'TP. Hồ Chí Minh',
                'zip_code' => '700000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('cities')->insert($cities);
    }
}
