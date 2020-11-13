<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        Role::create([
            'name'=> 'Administrador',
            'slug'=> 'admin',
        ]);

        Role::create([
            'name'=> 'Usuario estratégico',
            'slug'=> 'usues',
        ]);

        Role::create([
            'name'=> 'Usuario táctico',
            'slug'=> 'usutac',
        ]);

        Role::create([
            'name'=> 'Usuario operativo',
            'slug'=> 'usuope',
        ]);
    }
}
