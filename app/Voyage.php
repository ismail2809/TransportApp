<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model; 

class Voyage extends Model
{  
    protected $fillable = ['user_id','reservation_id']; 

    public function users(){

        return $this->belongsTo('App\User','user_id');
        
    } 
    public function reservations(){

        return $this->belongsTo('App\Reservation','reservation_id');
        
    } 
}
