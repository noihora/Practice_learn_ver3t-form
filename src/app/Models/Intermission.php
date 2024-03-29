<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intermission extends Model
{
    public function user()
	{
	    return $this->belongsTo('App\Models\User');
		
	}

    public function work()
	{
	    return $this->belongsTo('App\Models\Work');
		
	}

}
