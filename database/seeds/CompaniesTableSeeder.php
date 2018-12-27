<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'company_name' => 'Company_1',
                'city_id' => 1,
                'logo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ60eLu4OC8Vb2ebULLQXHAzzdTSyZWdj2N0wk9s2OhZWerY0P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'company_name' => 'Company_2',
                'city_id' => 2,
                'logo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ60eLu4OC8Vb2ebULLQXHAzzdTSyZWdj2N0wk9s2OhZWerY0P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'company_name' => 'Company_3',
                'city_id' => 1,
                'logo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ60eLu4OC8Vb2ebULLQXHAzzdTSyZWdj2N0wk9s2OhZWerY0P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'company_name' => 'Company_4',
                'city_id' => 3,
                'logo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ60eLu4OC8Vb2ebULLQXHAzzdTSyZWdj2N0wk9s2OhZWerY0P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'company_name' => 'Company_5',
                'city_id' => 2,
                'logo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ60eLu4OC8Vb2ebULLQXHAzzdTSyZWdj2N0wk9s2OhZWerY0P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('companies')->insert($companies);
    }
}
