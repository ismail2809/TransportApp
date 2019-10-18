<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model; 

class Reservation extends Model
{  
    protected $fillable = ['user_id','transport_id','trajet','nbr_place_disponible','date_voyage','description','prix']; 
}
