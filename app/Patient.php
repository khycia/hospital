<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table = 'patients';
    protected $primaryKey = 'patient_id';

    public function healthcare() {
     	return $this->hasOne(Healthcare::class);
     }
}
