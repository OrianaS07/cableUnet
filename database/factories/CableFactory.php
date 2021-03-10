<?php

namespace Database\Factories;

use App\Models\Cable;
use App\Models\Model;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class CableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(20),
            'precio' => $this->faker->randomFloat(2,0,1000),
            'plan_id' => Plan::all()->random()->id
        ];
    }
}
