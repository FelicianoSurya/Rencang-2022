<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewIndex(){
        $end_time = '2021-10-01 23:59:00';
        return view('page.home', ['title' => 'Rencang'],compact('end_time'));
    }
}
