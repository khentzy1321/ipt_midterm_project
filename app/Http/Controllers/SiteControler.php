<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControler extends Controller
{
    //
    public function index(){
        return view('pages.landing');
    }
}
