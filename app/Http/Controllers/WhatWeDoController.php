<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function viewIndex(){
        return view('page.WhatWeDo', ['title' => 'Rencang - What We Do']);
    }
}
