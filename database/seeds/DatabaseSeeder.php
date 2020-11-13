<?php

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
        //Desactivar llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Limpiar tablas
        DB::table('appointments')->truncate();
        DB::table('appointment_employee')->truncate();
        DB::table('establishments')->truncate();
        DB::table('suppliers')->truncate();
        DB::table('fumigation__types')->truncate();
        DB::table('establishment__types')->truncate();
        DB::table('clients')->truncate();
        DB::table('employees')->truncate();
        DB::table('product_types')->truncate();
        //DB::table('users')->truncate();
        //DB::table('roles')->truncate();
        //DB::table('role_user')->truncate();
        //DB::table('permissions')->truncate();
        //DB::table('permission_user')->truncate();
       // DB::table('permission_role')->truncate();

      
        //Llamar seeders
       
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(EstablishmentSeeder::class);
        $this->call(FumigationSeeder::class);
        $this->call(ProductTypeSeeder::class);
         $this->call(RoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);


          //Activar llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
