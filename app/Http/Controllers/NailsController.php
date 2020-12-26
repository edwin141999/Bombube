<?php

namespace App\Http\Controllers;

use App\Models\Nail;
use Illuminate\Http\Request;

class NailsController extends Controller
{
    public function index(){
        $nails = Nail::orderBy('id','asc')->paginate();

        return view('nails.index',compact('nails'));
    }

    public function show(Nail $nail){
        return view('nails.show',compact('nail'));
    }
}
