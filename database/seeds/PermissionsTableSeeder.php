<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Creacion de Usuarios',
            'slug'          => 'users.create',
            'description'   => 'Crear usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Edicion de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar todos los datos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar a cualquier usaurio del sistema',
        ]);

        //roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega cada los rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar todos los datos de cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar a cualquier rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de roles',
            'slug'          => 'roles.create',
            'description'   => 'crear los roles del sistema',
        ]);

    }
}
