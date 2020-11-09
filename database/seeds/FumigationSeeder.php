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
        factory(Appointment::class,50)->create();
        /*
        Appointment::create([
            "codigo_fumigacion" => "abc101",
            "fecha" => "2020-12-01",
            "hora" => "15:30:00",
            "cancelado" => 0,
            "monto" => 56.56,
            "fumigation_type_id" => 1,
            "establishment_id" => 1
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc102",
            "fecha" => "2020-12-05",
            "hora" => "13:00:00",
            "cancelado" => 0,
            "monto" => 26.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 1
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc103",
            "fecha" => "2020-12-09",
            "hora" => "09:30:00",
            "cancelado" => 0,
            "monto" => 26.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 1
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc104",
            "fecha" => "2020-12-20",
            "hora" => "08:45:00",
            "cancelado" => 0,
            "monto" => 100.06,
            "fumigation_type_id" => 2,
            "establishment_id" => 1
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc105",
            "fecha" => "2020-12-27",
            "hora" => "15:30:00",
            "cancelado" => 0,
            "monto" => 75.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 1
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc106",
            "fecha" => "2020-12-03",
            "hora" => "11:30:00",
            "cancelado" => 0,
            "monto" => 750.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 2
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc107",
            "fecha" => "2020-12-07",
            "hora" => "13:00:00",
            "cancelado" => 0,
            "monto" => 550.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 2
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc108",
            "fecha" => "2020-12-15",
            "hora" => "14:30:00",
            "cancelado" => 0,
            "monto" => 850.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 2
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc109",
            "fecha" => "2020-12-20",
            "hora" => "16:30:00",
            "cancelado" => 0,
            "monto" => 750.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 2
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc110",
            "fecha" => "2020-12-27",
            "hora" => "11:30:00",
            "cancelado" => 0,
            "monto" => 1200.00,
            "fumigation_type_id" => 3,
            "establishment_id" => 2
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc111",
            "fecha" => "2021-01-05",
            "hora" => "08:30:00",
            "cancelado" => 0,
            "monto" => 510.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 3
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc112",
            "fecha" => "2021-01-08",
            "hora" => "12:30:00",
            "cancelado" => 0,
            "monto" => 600.00,
            "fumigation_type_id" => 3,
            "establishment_id" => 3
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc113",
            "fecha" => "2021-01-10",
            "hora" => "16:00:00",
            "cancelado" => 0,
            "monto" => 430.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 3
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc114",
            "fecha" => "2021-01-15",
            "hora" => "06:30:00",
            "cancelado" => 0,
            "monto" => 910.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 3
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc115",
            "fecha" => "2021-01-25",
            "hora" => "13:30:00",
            "cancelado" => 0,
            "monto" => 250.00,
            "fumigation_type_id" => 4,
            "establishment_id" => 3
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc116",
            "fecha" => "2021-01-22",
            "hora" => "08:30:00",
            "cancelado" => 0,
            "monto" => 40.00,
            "fumigation_type_id" => 5,
            "establishment_id" => 4
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc117",
            "fecha" => "2021-01-27",
            "hora" => "08:30:00",
            "cancelado" => 0,
            "monto" => 45.00,
            "fumigation_type_id" => 4,
            "establishment_id" => 4
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc118",
            "fecha" => "2021-01-30",
            "hora" => "08:30:00",
            "cancelado" => 0,
            "monto" => 50.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 4
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc119",
            "fecha" => "2021-02-01",
            "hora" => "08:30:00",
            "cancelado" => 0,
            "monto" => 20.00,
            "fumigation_type_id" => 5,
            "establishment_id" => 4
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc120",
            "fecha" => "2021-02-06",
            "hora" => "08:30:00",
            "cancelado" => 0,
            "monto" => 15.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 4
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc121",
            "fecha" => "2021-02-05",
            "hora" => "05:30:00",
            "cancelado" => 0,
            "monto" => 89.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 5
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc122",
            "fecha" => "2021-02-09",
            "hora" => "09:30:00",
            "cancelado" => 0,
            "monto" => 59.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 5
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc123",
            "fecha" => "2021-02-13",
            "hora" => "17:30:00",
            "cancelado" => 0,
            "monto" => 109.00,
            "fumigation_type_id" => 3,
            "establishment_id" => 5
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc124",
            "fecha" => "2021-02-17",
            "hora" => "13:30:00",
            "cancelado" => 0,
            "monto" => 70.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 5
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc125",
            "fecha" => "2021-02-20",
            "hora" => "07:30:00",
            "cancelado" => 0,
            "monto" => 59.00,
            "fumigation_type_id" => 5,
            "establishment_id" => 5
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc126",
            "fecha" => "2021-02-18",
            "hora" => "09:30:00",
            "cancelado" => 0,
            "monto" => 159.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 6
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc127",
            "fecha" => "2021-02-21",
            "hora" => "11:30:00",
            "cancelado" => 0,
            "monto" => 189.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 6
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc128",
            "fecha" => "2021-02-27",
            "hora" => "10:30:00",
            "cancelado" => 0,
            "monto" => 100.00,
            "fumigation_type_id" => 5,
            "establishment_id" => 6
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc129",
            "fecha" => "2021-02-27",
            "hora" => "13:30:00",
            "cancelado" => 0,
            "monto" => 119.00,
            "fumigation_type_id" => 3,
            "establishment_id" => 6
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc130",
            "fecha" => "2021-03-02",
            "hora" => "09:30:00",
            "cancelado" => 0,
            "monto" => 70.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 6
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc131",
            "fecha" => "2021-03-01",
            "hora" => "10:30:00",
            "cancelado" => 0,
            "monto" => 70.00,
            "fumigation_type_id" => 3,
            "establishment_id" => 7
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc132",
            "fecha" => "2021-03-04",
            "hora" => "11:30:00",
            "cancelado" => 0,
            "monto" => 49.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 7
        ]);

        Appointment::create([
            "codigo_fumigacion" => "abc133",
            "fecha" => "2021-03-06",
            "hora" => "15:45:00",
            "cancelado" => 0,
            "monto" => 78.00,
            "fumigation_type_id" => 2,
            "establishment_id" => 7
        ]);


        Appointment::create([
            "codigo_fumigacion" => "abc134",
            "fecha" => "2021-03-15",
            "hora" => "11:30:00",
            "cancelado" => 0,
            "monto" => 29.00,
            "fumigation_type_id" => 5,
            "establishment_id" => 7
        ]);


        Appointment::create([
            "codigo_fumigacion" => "abc135",
            "fecha" => "2021-03-18",
            "hora" => "05:30:00",
            "cancelado" => 0,
            "monto" => 70.00,
            "fumigation_type_id" => 1,
            "establishment_id" => 7
        ]);
        */
    }
}
