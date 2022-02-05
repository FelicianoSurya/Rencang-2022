<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function viewIndex(){
        return view('page.WhoWeAre', ['title' => 'Rencang - Who We Are']);
    }
}
