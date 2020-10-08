<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inpatient extends Model
{
     protected $guarded=[];


     public function patients()
      {
      	return $this->belongsTo(Patients::class);
      }
}
 