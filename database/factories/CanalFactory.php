<?php

namespace Database\Factories;

use App\Models\Canal;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CanalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Canal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(20)
        ];
    }
}
