<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $fillable = ['name','last_name','email'];
    
    function profiles(){
        return $this->belongsToMany('App\Profile','technician_profiles')->withPivot('technician_id_trc');
    }
}
