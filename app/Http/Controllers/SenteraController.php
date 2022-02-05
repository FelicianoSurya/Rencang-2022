<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenteraController extends Controller
{
    public function viewIndex(){
        return view('page.sentera', ['title' => 'Rencang - Sentera']);
    }
}
