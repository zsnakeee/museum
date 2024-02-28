<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Setting;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'app_name' => $this->faker->word(),
            'app_description' => $this->faker->word(),
            'app_logo' => $this->faker->word(),
            'app_favicon' => $this->faker->word(),
        ];
    }
}
