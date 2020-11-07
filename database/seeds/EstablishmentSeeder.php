<?php

use Illuminate\Database\Seeder;
use \App\Establishment_Type;
class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establishment_Type::create([
           "nombre_tipo_establecimiento" => "Casas",
            "costo_aproximado" => 39.99
        ]);

        Establishment_Type::create([
            "nombre_tipo_establecimiento" => "Urbanizaciones completas",
            "costo_aproximado" => 349.99
        ]);

        Establishment_Type::create([
            "nombre_tipo_establecimiento" => "Edificios - 10 pisos",
            "costo_aproximado" => 439.99
        ]);

        Establishment_Type::create([
            "nombre_tipo_establecimiento" => "Negocios pequeños",
            "costo_aproximado" => 69.99
        ]);

        Establishment_Type::create([
            "nombre_tipo_establecimiento" => "Negocios grandes",
            "costo_aproximado" => 109.99
        ]);


    }
}
