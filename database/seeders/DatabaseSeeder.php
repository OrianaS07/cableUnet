<?php

namespace Database\Seeders;
use App\Models\Model;
use App\Models\Cable;
use App\Models\Canal;
use App\Models\Factura;
use App\Models\Internet;
use App\Models\Paquete;
use App\Models\Plan;
use App\Models\Programa;
use App\Models\Telefonia;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        $programas = Programa::factory(10)->create();
        $canales = Canal::factory(10)->create();

        foreach($programas as $programa){
            $programa->canales()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }

        Plan::factory(10)->create();

        foreach($canales as $canal){
            $canal->plans()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }

        Cable::factory(10)->create();
        Internet::factory(10)->create();     
        Telefonia::factory(10)->create();   
        Paquete::factory(10)->create();
        Factura::factory(10)->create();

        
    }
}
