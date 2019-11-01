<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model; 

class Transport extends Model
{  
    protected $fillable = ['name']; 
    
    public function voyage(){
        return $this->hasMany('App\Voyage');
    }
}
