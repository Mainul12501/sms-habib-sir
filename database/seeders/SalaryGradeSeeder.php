<?php

namespace Database\Seeders;

use App\Models\Backend\Account\SalaryGrade;
use Illuminate\Database\Seeder;

class SalaryGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalaryGrade::factory()
            ->count(5)
            ->create();
    }
}
