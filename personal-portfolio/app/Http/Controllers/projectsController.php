<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function page(Request $request){
        return view("projects");
    }  
}
