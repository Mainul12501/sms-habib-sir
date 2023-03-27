<?php

namespace Database\Factories;

use App\Models\Backend\Account\OtherIncome;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OtherIncomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OtherIncome::class;

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
        ];
    }
}
