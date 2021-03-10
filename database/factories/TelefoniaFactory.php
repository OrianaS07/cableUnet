<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Telefonia;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelefoniaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telefonia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(20),
            'minutos' => $this->faker->numberBetween(100,900),
            'precio' => $this->faker->randomFloat(2,0,1000)
        ];
    }
}
