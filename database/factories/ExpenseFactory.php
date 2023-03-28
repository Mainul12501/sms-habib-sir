<?php

namespace Database\Factories;

use App\Models\Backend\Academic\AcademicYear;
use App\Models\Backend\Account\Expense;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->text(255),
            'amount' => $this->faker->randomNumber(0),
            'note' => $this->faker->text,
            'status' => $this->faker->numberBetween(0, 127),
            'uploaded_by' => User::factory(),
            'academic_year_id' => AcademicYear::factory(),
        ];
    }
}
