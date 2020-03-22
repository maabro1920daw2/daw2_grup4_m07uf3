<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable =['showName','showDesc','showTip','showClas','showChannel'];
    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }
    public function grids()
    {
        return $this->belongsToMany('App\Grid');
    }
}