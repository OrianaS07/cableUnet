<?php

namespace Database\Factories;

use App\Models\Cable;
use App\Models\Internet;
use App\Models\Model;
use App\Models\Paquete;
use App\Models\Telefonia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PaqueteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paquete::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //llenar que campos y con que tipo de datos de prueba llenar
            'nombre' => $this->faker->unique()->company(),
            'precio' => $this->faker->randomFloat(2,0,1000),
            'fecha' => $this->faker->date('Y-m-d','now'),

            //asignando valores ramdon de servicios
            'internet_id' => Internet::all()->random()->id,
            'cable_id' => Cable::all()->random()->id,
            'telefonia_id' => Telefonia::all()->random()->id
            
        ];
    }
}
