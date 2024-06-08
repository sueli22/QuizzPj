<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UiController extends Controller
{

    public function contact(){
        return view('ui.contact');
    }
    public function about(){
        return view('ui.about');
    }


}
