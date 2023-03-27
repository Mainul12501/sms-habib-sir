<?php

namespace Database\Seeders;

use App\Models\Backend\Account\OtherIncome;
use Illuminate\Database\Seeder;

class OtherIncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OtherIncome::factory()
            ->count(5)
            ->create();
    }
}
