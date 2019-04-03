<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
	protected $appends = ['info'];
	
    public function getInfoAttribute()
    {
    	return $this->name . ' - ' . $this->iata;
    }
}
