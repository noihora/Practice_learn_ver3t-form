<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function user()
	{
	    return $this->belongsTo('App\Models\User');
		
	}

	public function intermission()
	{
	    return $this->belongsTo('App\Models\Intermission');
		
	}

   
}


