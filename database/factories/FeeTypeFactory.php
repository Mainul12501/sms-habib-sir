<?php

namespace Database\Factories;

use App\Models\Backend\Account\FeeType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeeTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeeType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fee_type' => $this->faker->text(255),
            'note' => $this->faker->text,
            'slug' => $this->faker->slug,
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
