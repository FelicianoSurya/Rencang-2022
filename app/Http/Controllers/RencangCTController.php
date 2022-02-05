<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RencangCTController extends Controller
{
    public function viewIndex(){
        return view('page.rencangCT', ['title' => 'Rencang - RCT']);
    }
}
