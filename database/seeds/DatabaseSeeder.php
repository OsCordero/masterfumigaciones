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
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(EstablishmentSeeder::class);
        $this->call(FumigationSeeder::class);
    }
}
