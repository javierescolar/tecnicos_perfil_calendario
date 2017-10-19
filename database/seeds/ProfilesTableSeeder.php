<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'name' => 'Técnico de Oxígeno'
            ],
            [
                 'name' => 'Técnico Instalador'
            ],
            [
                'name' => 'Técnico Mantenimiento'
            ]
        ]
        );
        
    }
}
