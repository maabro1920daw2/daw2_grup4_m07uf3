<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
	protected $fillable =['gridId','hour','day','gridChannel','gridShow'];
   public function shows()
    {
        return $this->belongsToMany('App\Show');
    }
}
