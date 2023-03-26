<?php

namespace Database\Seeders;

use App\Models\Backend\Account\FeeType;
use Illuminate\Database\Seeder;

class FeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeeType::factory()
            ->count(5)
            ->create();
    }
}
