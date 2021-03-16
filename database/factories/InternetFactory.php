<?php

namespace Database\Factories;

use App\Models\Internet;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->streetSuffix(),
            'velocidad' => $this->faker->numberBetween(100,900),
            'precio' => $this->faker->randomFloat(2,0,1000)
        ];
    }
}
