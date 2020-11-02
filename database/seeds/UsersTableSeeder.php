<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $r1 = Role::create([
            'name'      => 'Admin',
            'slug'      => 'admin',
            'special'   => 'all-access',
        ]);
        Role::create([
            'name'      => 'Suspendido',
            'slug'      => 'suspendido',
            'special'   => 'no-access',
        ]);
        User::create([
            'name'=> 'Julio Paredes',
            'email'=> 'julio.paredes@ues.edu.sv',
            'password'=> bcrypt('adminpa01*'),
        ]);
        User::find(1)->roles()->save($r1);
        factory(App\User::class, 2)->create();
    }
}
