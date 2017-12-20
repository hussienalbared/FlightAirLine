<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    public function flights()
    {
    	return $this->belongsToMany(flight::class);
    }
}
