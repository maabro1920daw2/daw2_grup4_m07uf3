<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
	protected $fillable =['channelId','channelName'];
    public function shows()
    {
        return $this->hasMany('App\Show');
    }
}
