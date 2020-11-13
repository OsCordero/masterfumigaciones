<?php

use Illuminate\Database\Seeder;


class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [1,1]);
        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [2,2]);
        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [3,3]);
        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [3,4]);
        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [4,4]);
        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [5,4]);
        
    }

}
