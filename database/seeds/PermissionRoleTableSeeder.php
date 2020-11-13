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
        //
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [1, 1]);
    }
}
