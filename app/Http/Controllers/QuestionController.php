<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Category;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

    //index
    public function index(){

        $questions = Question::with('category')->latest()->paginate(10);

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
        Question::find($id)->delete();
        return redirect()->route('questions')->with('success','Delete successfully');

    }
    //editPage

    public function edit($id){
        $categories = Category::all();
        $q=Question::find($id);
        return view('Admin.question.edit',compact('q','categories'));
    }

    public function update(Request $request,$id){
       $data=$request->validate([
        'name'=>'required',
        'category_id'=>'required'
       ]);

       Question::find($id)->update($data);
       return redirect()->route('questions')->with('success','Update  successfully');


    }

    //seeanser
    public function seeAnswers($id){
        $question = Question::findOrFail($id);
        $options =$question->options;
        return view('Admin.question.seeanswers',compact('question','options'));
    }
}
