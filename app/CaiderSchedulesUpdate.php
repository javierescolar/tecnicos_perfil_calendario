<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaiderSchedulesUpdate extends Model
{
    protected $fillable = [
        'caider_id',
        'schedule_from',
        'schedule_to',
        'weekday'   
    ];
    
    protected $table = 'caiders_schedulesUpdate';
    
    function caider(){
        return $this->belongsTo('App\Caider');
    }
}
