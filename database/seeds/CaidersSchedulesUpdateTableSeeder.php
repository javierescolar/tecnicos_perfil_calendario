<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CaidersSchedulesUpdateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('caiders_schedulesUpdate')->insert([
                'caider_id' => 1,
                'schedule_from' => '10:00',
                'schedule_to' => '14:00',
                'weekday' => Carbon::create('2017', '10', '25')
        ]);
    }
}
