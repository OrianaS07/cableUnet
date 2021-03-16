<?php

namespace Database\Factories;

use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Programa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(20),
            'informacion' => $this->faker->text(150),
            'fecha'=> $this->faker->dateTimeThisYear('+1 month'),
            'hora'=> $this->faker->time()
        ];
    }
}
