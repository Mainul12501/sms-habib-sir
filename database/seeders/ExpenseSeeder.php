<?php

namespace Database\Seeders;

use App\Models\Backend\Account\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expense::factory()
            ->count(5)
            ->create();
    }
}
