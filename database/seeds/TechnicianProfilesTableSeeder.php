<?php

use Illuminate\Database\Seeder;

class TechnicianProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('technician_profiles')->insert([
             [
                'technician_id' => 1,
                'profile_id' => 2,
                'technician_id_trc' => 1500,
                
             ],
             [
                'technician_id' => 1,
                'profile_id' => 3,
                'technician_id_trc' => 2700,
                
             ]
            
        ]);
    }
}
