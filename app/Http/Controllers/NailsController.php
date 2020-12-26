<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NailsController extends Controller
{
    public function index(){
        return view('nails.index');
    }
}
