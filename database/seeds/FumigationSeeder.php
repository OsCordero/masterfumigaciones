<?php

use Illuminate\Database\Seeder;
use \App\Fumigation_Type;
use \App\Appointment;

class FumigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fumigation_Type::create([
           "nombre_tipo_fumigacion" => "Asesino de ratas"
        ]);

        Fumigation_Type::create([
            "nombre_tipo_fumigacion" => "Asesino de cucarachas"
        ]);

        Fumigation_Type::create([
            "nombre_tipo_fumigacion" => "Asesino de geckos :V"
        ]);

        Fumigation_Type::create([
            "nombre_tipo_fumigacion" => "Asesino de mosquitos"
        ]);

        Fumigation_Type::create([
            "nombre_tipo_fumigacion" => "Asesion de moscas"
        ]);

        // Appointments
        Appointment::create([
            "codigo_fumigacion" => "abc101",
            "fecha" => "2020-12-01",
            "hora" => "15:30:00",
            "cancelado" => 0,
            "monto" => 56.56,
            "fumigation_type_id" => 1,
            "establishment_id" => 1
        ]);
    }
}
