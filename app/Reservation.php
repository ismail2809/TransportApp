<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model; 

class Reservation extends Model
{  
    protected $fillable = ['user_id','transport_id','trajet','nbr_place_disponible','date_voyage','description','prix']; 

    public function users(){

        return $this->belongsTo('App\User','user_id');
        
    } 
    public function reservations(){

        return $this->belongsTo('App\Reservation','reservation_id');
        
    } 
}
