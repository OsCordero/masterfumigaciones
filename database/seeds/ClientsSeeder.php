<?php

use Illuminate\Database\Seeder;
use \App\Client;
use \Database\Factories\ClientsFactory;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class,15)->create();

        /*
        Client::create([
            "nombre_cliente" => "Cliente 1",
            "dui" => "111111111",
            "telefono_cliente" => "1111-1111",
            "celular_cliente" => "7777-7771",
            "correo_cliente" => "cliente1@gmail.com",
            "comentarios" => "comentario 1"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 2",
            "dui" => "111111112",
            "telefono_cliente" => "1111-1112",
            "celular_cliente" => "7777-7772",
            "correo_cliente" => "cliente2@gmail.com",
            "comentarios" => "comentario 2"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 3",
            "dui" => "111111113",
            "telefono_cliente" => "1111-1113",
            "celular_cliente" => "7777-7773",
            "correo_cliente" => "cliente3@gmail.com",
            "comentarios" => "comentario 3"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 4",
            "dui" => "111111114",
            "telefono_cliente" => "1111-1114",
            "celular_cliente" => "7777-7774",
            "correo_cliente" => "cliente4@gmail.com",
            "comentarios" => "comentario 4"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 5",
            "dui" => "111111115",
            "telefono_cliente" => "1111-1115",
            "celular_cliente" => "7777-7775",
            "correo_cliente" => "cliente5@gmail.com",
            "comentarios" => "comentario 5"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 6",
            "dui" => "111111116",
            "telefono_cliente" => "1111-1116",
            "celular_cliente" => "7777-7776",
            "correo_cliente" => "cliente6@gmail.com",
            "comentarios" => "comentario 6"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 7",
            "dui" => "111111117",
            "telefono_cliente" => "1111-1117",
            "celular_cliente" => "7777-7777",
            "correo_cliente" => "cliente7@gmail.com",
            "comentarios" => "comentario 7"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 8",
            "dui" => "111111118",
            "telefono_cliente" => "1111-1118",
            "celular_cliente" => "7777-7778",
            "correo_cliente" => "cliente8@gmail.com",
            "comentarios" => "comentario 8"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 9",
            "dui" => "111111119",
            "telefono_cliente" => "1111-1119",
            "celular_cliente" => "7777-7779",
            "correo_cliente" => "cliente9@gmail.com",
            "comentarios" => "comentario 9"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 10",
            "dui" => "111111110",
            "telefono_cliente" => "1111-1110",
            "celular_cliente" => "7777-7770",
            "correo_cliente" => "cliente10@gmail.com",
            "comentarios" => "comentario 10"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 11",
            "dui" => "111111121",
            "telefono_cliente" => "1111-1121",
            "celular_cliente" => "7777-7721",
            "correo_cliente" => "cliente11@gmail.com",
            "comentarios" => "comentario 11"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 12",
            "dui" => "111111122",
            "telefono_cliente" => "1111-1122",
            "celular_cliente" => "7777-7722",
            "correo_cliente" => "cliente12@gmail.com",
            "comentarios" => "comentario 12"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 13",
            "dui" => "111111123",
            "telefono_cliente" => "1111-1123",
            "celular_cliente" => "7777-7723",
            "correo_cliente" => "cliente13@gmail.com",
            "comentarios" => "comentario 13"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 14",
            "dui" => "111111124",
            "telefono_cliente" => "1111-1124",
            "celular_cliente" => "7777-7724",
            "correo_cliente" => "cliente14@gmail.com",
            "comentarios" => "comentario 14"
        ]);
        Client::create([
            "nombre_cliente" => "Cliente 15",
            "dui" => "111111125",
            "telefono_cliente" => "1111-1125",
            "celular_cliente" => "7777-7725",
            "correo_cliente" => "cliente15@gmail.com",
            "comentarios" => "comentario 15"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 16",
            "dui" => "111111126",
            "telefono_cliente" => "1111-1126",
            "celular_cliente" => "7777-7726",
            "correo_cliente" => "cliente16@gmail.com",
            "comentarios" => "comentario 16"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 17",
            "dui" => "111111127",
            "telefono_cliente" => "1111-1127",
            "celular_cliente" => "7777-7727",
            "correo_cliente" => "cliente17@gmail.com",
            "comentarios" => "comentario 17"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 18",
            "dui" => "111111128",
            "telefono_cliente" => "1111-1128",
            "celular_cliente" => "7777-7728",
            "correo_cliente" => "cliente28@gmail.com",
            "comentarios" => "comentario 28"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 19",
            "dui" => "111111129",
            "telefono_cliente" => "1111-1129",
            "celular_cliente" => "7777-7729",
            "correo_cliente" => "cliente19@gmail.com",
            "comentarios" => "comentario 19"
        ]);

        Client::create([
            "nombre_cliente" => "Cliente 20",
            "dui" => "111111130",
            "telefono_cliente" => "1111-1130",
            "celular_cliente" => "7777-7730",
            "correo_cliente" => "cliente20@gmail.com",
            "comentarios" => "comentario 20"
        ]);
        */
    }
}
