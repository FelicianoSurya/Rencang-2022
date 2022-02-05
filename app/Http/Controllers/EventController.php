<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function viewIndex(){
        return view('page.event', ['title' => 'Rencang - Event']);
    }
}
