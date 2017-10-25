<?php

use Illuminate\Database\Seeder;

class CaidersSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caiders_schedules')->insert([
            [
                'caider_id' => 1,
                'schedule_from' => '10:00',
                'schedule_to' => '14:00',
                'weekday' => 'Monday'
            ],
            [
                'caider_id' => 1,
                'schedule_from' => '16:00',
                'schedule_to' => '20:00',
                'weekday' => 'Monday'
            ],
            [
                'caider_id' => 1,
                'schedule_from' => '10:00',
                'schedule_to' => '14:00',
                'weekday' => 'Tuesday'
            ],
            [
                'caider_id' => 1,
                'schedule_from' => '16:00',
                'schedule_to' => '20:00',
                'weekday' => 'Wednesday'
            ],
            [
                'caider_id' => 1,
                'schedule_from' => '16:00',
                'schedule_to' => '20:00',
                'weekday' => 'Thursday'
            ],
            [
                'caider_id' => 1,
                'schedule_from' => '09:00',
                'schedule_to' => '12:00',
                'weekday' => 'Friday'
            ]
        ]);
    }
}
