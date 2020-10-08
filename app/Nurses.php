
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

}
