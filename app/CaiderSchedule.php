<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaiderSchedule extends Model
{
    
    
    protected $fillable = [
        'caider_id',
        'schedule_from',
        'schedule_to',
        'weekday'   
    ];
    
    protected $table = 'caiders_schedules';
    
    function caider(){
        return $this->belongsTo('App\Caider');
    }
}
