<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Category;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

    //index
    public function index(){

        $questions = Question::with('category')->get();

        return view('admin.question.index', compact('questions'));
    }
      //addform
    public function add(){
        $categories = Category::all();

        return view('admin.question.create', compact('categories'));
    }
    //storenewQuestion
    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required',
            'category_id'=>'required'
        ]);
        Question::create($data);

        return redirect()->route('questions')->with('success','Created New Question');
    }
    //delete(Qusetion)

    public function delete($id){
        dd($id);
    }
}
