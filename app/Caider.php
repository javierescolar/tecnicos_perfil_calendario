<?php

namespace App;

use App\CaiderSchedule;
use Illuminate\Database\Eloquent\Model;
use DB;

class Caider extends Model
{
    protected $fillable = [
        'name',
        'local_id_trc',
        'address',
        'schedule_from',
        'schedule_to',
        'phone',
        'zip_code'    
    ];
    
    function schedules(){
        return $this->hasMany('App\CaiderSchedule');
    }
    
    function schedulesUpdate(){
        $schedules = DB::table('caiders')
            ->join('caiders_schedulesUpdate', 'caiders.id', '=', 'caiders_schedulesUpdate.caider_id')
            ->select('caiders_schedulesUpdate.*')
            ->get();
       return $schedules;
    }
    
    
    function checkUpdateScheduleFromDate($date){
        return ($schedules = DB::table('caiders')
            ->join('caiders_schedulesUpdate', 'caiders.id', '=', 'caiders_schedulesUpdate.caider_id')
            ->where ('weekday','=',$date)
            ->count() > 0);
    }
    
    function schedulesFromDate($date){
            
        $schedules_update = DB::table('caiders')
            ->join('caiders_schedulesUpdate', 'caiders.id', '=', 'caiders_schedulesUpdate.caider_id')
            ->where ('weekday','=',$date)
            ->get();
            
       return $schedules_update;
    }
}
