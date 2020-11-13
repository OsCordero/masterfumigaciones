<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [1, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [2, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [3, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [4, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [5, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [6, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [7, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [8, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [9, 1]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [10, 1]);


        //estrategico
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [1, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [2, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [3, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [4, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [5, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [6, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [7, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [8, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [9, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [10, 2]);


        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [11, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [12, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [13, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [14, 2]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [15, 2]);



        //tactico
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [11, 3]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [12, 3]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [13, 3]);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [15, 3]);


        //operativo
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [11, 4]);
             



    }
}
