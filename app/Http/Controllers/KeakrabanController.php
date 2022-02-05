<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeakrabanController extends Controller
{
    public function viewIndex(){
        return view('page.Keakraban', ['title' => 'Rencang - Keakraban']);
    }
}