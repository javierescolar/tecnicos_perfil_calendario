<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TechniciansTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(TechnicianProfilesTableSeeder::class);
    }
}
