<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SCHController extends Controller
{
    public function viewIndex(){
        return view('page.sch',['title' => 'Rencang - SCH']);
    }
}
