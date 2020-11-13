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
        User::create([
            'name'=> 'Administrador',
            'email'=> 'masterfumigaciones@gmail.com',
            'password'=> bcrypt('adminpa01*'),
        ]);

        User::create([
            'name'=> 'Wilber Antonio Vigil',
            'email'=> 'wilber145@gmail.com',
            'password'=> bcrypt('wilber01*'),
        ]);
        User::create([
            'name'=> 'Margarita Hernández',
            'email'=> 'margaherna@hotmail.com',
            'password'=> bcrypt('margarita01*'),
        ]);
        User::create([
            'name'=> 'Pedro Cruz',
            'email'=> 'pedro80@gmail.com',
            'password'=> bcrypt('pedro01*'),
        ]);
        User::create([
            'name'=> 'Luis Hernández',
            'email'=> 'luishernandez0407@gmail.com',
            'password'=> bcrypt('luis01*'),
        ]);
       
        
    }
}
