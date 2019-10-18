<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model; 

class Voyage extends Model
{  
    protected $fillable = ['user_id','reservation_id']; 
}
