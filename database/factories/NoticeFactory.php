<?php

namespace Database\Factories;

use App\Models\Backend\Administrator\Notice;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'date' => $this->faker->text(191),
            'date_timestamp' => $this->faker->text(191),
            'notice' => $this->faker->text,
            'slug' => $this->faker->slug,
            'status' => $this->faker->numberBetween(0, 127),
            'uploader_id' => \App\Models\User::factory(),
        ];
    }
}
