<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Result;


class UiController extends Controller
{

    public function contact(){
        return view('ui.contact');
    }
    public function about(){
        return view('ui.about');
    }


    //To show categoriees to user panel

    public function userCategories(){

        $categories = Category::all();
        return view('ui.categories',compact('categories'));
    }
    //start test after choosing category

    public function testStart($id){
        $category = Category::with(['questions.options'])->findOrFail($id);

        return view('ui.test',compact('category'));


    }

    //submit



}
