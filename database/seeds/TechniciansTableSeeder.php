<?php

use Illuminate\Database\Seeder;

class TechniciansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('technicians')->insert([
            'name' => 'Técnico 1',
            'last_name' => 'Técnico 1 Técnico 1',
            'email' => 'tecnico_1@gmail.com',
        ]);
    }
}
