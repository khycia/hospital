<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outpatients extends Model
{
protected $guarded = [];  


 public function outpatients()
 {
  return $this->hasMany(inpatients::class);

 }

 public function full_name() {

   return $this->last_name. ' ' .$this->diagnosis. '' .$this->lab_number;


 }

   //   $table->id('id');
   //  $table->string('room_type');
    //        $table->string('ward');
}
