<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
	protected $fillable =['gridHour','gridDay'];
   public function shows()
    {
        return $this->belongsToMany('App\Show');
    }
}
