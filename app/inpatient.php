<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inpatient extends Model
{
     protected $guarded=[];

     public function room() {
     	return $this->hasOne(Room::class);
     }

     public function healthcare() {
     	return $this->hasOne(Healthcare::class);
     }

     public function patients()
      {
      	return $this->belongsTo(Patients::class);
      }

      public function name_diagnosis()
      {
      	return $this->name.' has diagnosis of '.$this->diagnosis;
      }
}
 