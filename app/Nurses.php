
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurses extends Model
{
	protected $table = 'nurses';
    protected $primaryKey = 'nurse_id';
protected $guarded=[];

    public function nurses()
    {
    	return $this->hasMany(nurses::class);
    }
      public function credential()
    {
        return $this->first_name.' '.$this->last_name.' '.$this->contact_number.' '.$this->email;
    }

}
