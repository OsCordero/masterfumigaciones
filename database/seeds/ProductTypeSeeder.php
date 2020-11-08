<?php

use Illuminate\Database\Seeder;
use \App\Supplier;
use \App\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Products
        ProductType::create([
            "nombre_tipo_producto" => "Pesticidas",
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Equipo deBioseguridad",
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Venenos comúnes",
        ]);

        // Suppliers
        Supplier::create([
           "nombre_proveedor" => "Proveedor 1",
            "product_types_id" => 1,
            "direccion_proveedor" => "Direccion 1",
            "telefono_proveedor" => "2222-2221",
            "celular_proveedor" => "7777-7771",
            "correo_proveedor" => "proveedor1@gmail.com",
            "comentarios" => "Comentarios 1"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 2",
            "product_types_id" => 2,
            "direccion_proveedor" => "Direccion 2",
            "telefono_proveedor" => "2222-2222",
            "celular_proveedor" => "7777-7772",
            "correo_proveedor" => "proveedor2@gmail.com",
            "comentarios" => "Comentarios 2"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 3",
            "product_types_id" => 1,
            "direccion_proveedor" => "Direccion 3",
            "telefono_proveedor" => "2222-2223",
            "celular_proveedor" => "7777-7773",
            "correo_proveedor" => "proveedor3@gmail.com",
            "comentarios" => "Comentarios 3"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 4",
            "product_types_id" => 3,
            "direccion_proveedor" => "Direccion 4",
            "telefono_proveedor" => "2222-2224",
            "celular_proveedor" => "7777-7774",
            "correo_proveedor" => "proveedor4@gmail.com",
            "comentarios" => "Comentarios 4"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 5",
            "product_types_id" => 2,
            "direccion_proveedor" => "Direccion 5",
            "telefono_proveedor" => "2222-2225",
            "celular_proveedor" => "7777-7775",
            "correo_proveedor" => "proveedor5@gmail.com",
            "comentarios" => "Comentarios 5"
        ]);
    }
}
