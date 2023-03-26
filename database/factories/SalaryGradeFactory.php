<?php

namespace Database\Factories;

use App\Models\Backend\Account\SalaryGrade;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaryGradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SalaryGrade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'salary_grade' => $this->faker->text(191),
            'basic' => $this->faker->randomNumber(0),
            'house_rent' => $this->faker->randomNumber(0),
            'medical' => $this->faker->randomNumber(0),
            'ta_da' => $this->faker->randomNumber(0),
            'others' => $this->faker->randomNumber(0),
            'note' => $this->faker->text,
            'slug' => $this->faker->slug,
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
