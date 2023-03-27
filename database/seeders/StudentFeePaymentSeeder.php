<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Backend\Account\StudentFeePayment;

class StudentFeePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentFeePayment::factory()
            ->count(5)
            ->create();
    }
}
