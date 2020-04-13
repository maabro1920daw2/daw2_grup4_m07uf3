<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
	protected $fillable =['channelName','channelLogo'];
    public function shows()
    {
        return $this->hasMany('App\Show');
    }
}
