<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Intermission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class WorkController extends Controller
{

    public function day(Request $request)
    {
        
        $users = User::Paginate(5);   

        return view('day', ['users' => $users]);
    }
}