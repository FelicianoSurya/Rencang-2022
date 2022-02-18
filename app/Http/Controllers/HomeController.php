<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewIndex(){
        $end_time = '2022-02-19 12:00:00';
        return view('page.home', ['title' => 'Rencang'],compact('end_time'));
    }
}
