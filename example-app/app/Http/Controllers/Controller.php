<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB as DB;

abstract class Controller
{
    //

    public function index()
    {
        //$users = DB::select('select * from users where active = ?', [1]);

        //return view('user.index', ['users' => $users]);
    }
}
