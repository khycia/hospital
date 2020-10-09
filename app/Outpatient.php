<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outpatient extends Model
{
protected $guarded = [];  
 
 public function healthcare() {
     	return $this->hasOne(Healthcare::class);
     }

   
}
