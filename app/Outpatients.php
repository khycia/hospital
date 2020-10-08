<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outpatients extends Model
{
protected $guarded = [];  


 public function inpatients()
 {
  return $this->hasMany(inpatients::class);

 }

   //   $table->id('id');
   //  $table->string('room_type');
    //        $table->string('ward');
}
