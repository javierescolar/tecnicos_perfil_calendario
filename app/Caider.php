<?php

namespace App;

use App\CaiderSchedule;
use App\CaiderSchedulesUpdate;
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
        return $this->hasMany('App\CaiderSchedulesUpdate');
    }
    
    function schedulesFromDate($date){
        return $this->hasMany('App\CaiderSchedulesUpdate')->where('weekday','=',$date)->get();
    }
}
