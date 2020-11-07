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
        // Suppliers
        Supplier::create([
           "nombre_proveedor" => "Proveedor 1",
            "direccion_proveedor" => "Direccion 1",
            "telefono_proveedor" => "2222-2221",
            "celular_proveedor" => "7777-7771",
            "correo_proveedor" => "proveedor1@gmail.com",
            "comentarios" => "Comentarios 1"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 2",
            "direccion_proveedor" => "Direccion 2",
            "telefono_proveedor" => "2222-2222",
            "celular_proveedor" => "7777-7772",
            "correo_proveedor" => "proveedor2@gmail.com",
            "comentarios" => "Comentarios 2"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 3",
            "direccion_proveedor" => "Direccion 3",
            "telefono_proveedor" => "2222-2223",
            "celular_proveedor" => "7777-7773",
            "correo_proveedor" => "proveedor3@gmail.com",
            "comentarios" => "Comentarios 3"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 4",
            "direccion_proveedor" => "Direccion 4",
            "telefono_proveedor" => "2222-2224",
            "celular_proveedor" => "7777-7774",
            "correo_proveedor" => "proveedor4@gmail.com",
            "comentarios" => "Comentarios 4"
        ]);

        Supplier::create([
            "nombre_proveedor" => "Proveedor 5",
            "direccion_proveedor" => "Direccion 5",
            "telefono_proveedor" => "2222-2225",
            "celular_proveedor" => "7777-7775",
            "correo_proveedor" => "proveedor5@gmail.com",
            "comentarios" => "Comentarios 5"
        ]);

        //Products
        ProductType::create([
            "nombre_tipo_producto" => "Producto 1",
            "supplier_id" => 1
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 2",
            "supplier_id" => 1
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 3",
            "supplier_id" => 1
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 4",
            "supplier_id" => 2
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 5",
            "supplier_id" => 2
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 6",
            "supplier_id" => 3
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 7",
            "supplier_id" => 3
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 8",
            "supplier_id" => 3
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 9",
            "supplier_id" => 4
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 10",
            "supplier_id" => 5
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 11",
            "supplier_id" => 5
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 12",
            "supplier_id" => 5
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 13",
            "supplier_id" => 5
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 14",
            "supplier_id" => 5
        ]);

        ProductType::create([
            "nombre_tipo_producto" => "Producto 15",
            "supplier_id" => 4
        ]);
    }
}
