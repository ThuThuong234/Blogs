<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'department_name' => 'department_1',
                'company_id' => 4,
                'manage_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'department_name' => 'department_2',
                'company_id' => 4,
                'manage_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'department_name' => 'department_3',
                'company_id' => 3,
                'manage_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'department_name' => 'department_4',
                'company_id' => 2,
                'manage_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('departments')->insert($departments);
    }
}
