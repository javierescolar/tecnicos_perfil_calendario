<?php

use Illuminate\Database\Seeder;

class CaidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caiders')->insert([
            'name' => 'CAIDER BELLVITGE',
            'local_id_trc' => 1,
            'address' => 'C/ MARE DE DEU DE BELLVITGE 3',
            'phone' => 654987654,
            'zip_code' => 08907
        ]);
    }
}
