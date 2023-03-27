<?php

namespace Database\Factories;

use App\Models\Backend\Academic\AcademicClass;
use App\Models\Backend\Academic\AcademicYear;
use App\Models\Backend\Academic\Section;
use App\Models\Backend\Account\FeeType;
use App\Models\Backend\UserManagement\Student;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Backend\Account\StudentFeePayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFeePaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentFeePayment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'month' => $this->faker->monthName,
            'amount' => $this->faker->randomNumber(0),
            'due' => $this->faker->randomNumber(0),
            'status' => $this->faker->numberBetween(0, 127),
            'payment_method' => $this->faker->text(191),
            'txt_id' => $this->faker->text(191),
            'user_id' => User::factory(),
            'student_id' => Student::factory(),
            'academic_year_id' => AcademicYear::factory(),
            'academic_class_id' => AcademicClass::factory(),
            'section_id' => Section::factory(),
            'fee_type_id' => FeeType::factory(),
        ];
    }
}
