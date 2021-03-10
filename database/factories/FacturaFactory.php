<?php

namespace Database\Factories;
use App\Models\Model;
use App\Models\Factura;
use App\Models\Paquete;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'monto' => $this->faker->randomFloat(2,0,1000),
            'user_id' => User::all()->random()->id,
            'paquete_id' => Paquete::all()->random()->id
        ];
    }
}
