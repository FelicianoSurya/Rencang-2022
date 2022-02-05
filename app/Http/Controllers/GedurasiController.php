<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GedurasiController extends Controller
{
    public function viewIndex(){
        return view('page.gedurasi', ['title' => 'Rencang - Gedurasi']);
    }
}
