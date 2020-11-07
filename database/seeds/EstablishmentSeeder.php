<?php

use Illuminate\Database\Seeder;
use \App\Establishment_Type;
use \App\Establishment;

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

        //Creación de establishments
        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 1",
            "direccion_establecimiento" => "Dirección 1",
            "telefono_establecimiento" => "2222-2221",
            "client_id" => 1,
            "establishment_type_id" => 1
        ]);

        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 2",
            "direccion_establecimiento" => "Dirección 2",
            "telefono_establecimiento" => "2222-2222",
            "client_id" => 2,
            "establishment_type_id" => 2
        ]);

        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 3",
            "direccion_establecimiento" => "Dirección 3",
            "telefono_establecimiento" => "2222-2223",
            "client_id" => 3,
            "establishment_type_id" => 3
        ]);

        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 4",
            "direccion_establecimiento" => "Dirección 4",
            "telefono_establecimiento" => "2222-2224",
            "client_id" => 4,
            "establishment_type_id" => 1
        ]);

        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 5",
            "direccion_establecimiento" => "Dirección 5",
            "telefono_establecimiento" => "2222-2225",
            "client_id" => 5,
            "establishment_type_id" => 4
        ]);

        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 6",
            "direccion_establecimiento" => "Dirección 6",
            "telefono_establecimiento" => "2222-2226",
            "client_id" => 6,
            "establishment_type_id" => 5
        ]);

        Establishment::create([
            "nombre_establecimiento" => "Establecimiento 7",
            "direccion_establecimiento" => "Dirección 7",
            "telefono_establecimiento" => "2222-2227",
            "client_id" => 7,
            "establishment_type_id" => 1
        ]);
    }
}
