<?php

namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Option;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTestRequest;
use App\Models\QuestionResult;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(StoreTestRequest $request)

    {
        // Retrieve selected options
        $selectedOptionIds = array_values($request->input('questions'));
        $options = Option::whereIn('id', $selectedOptionIds)->get();
        $category_id=$request->input('category_id');


        // Calculate total points
        $totalPoints = $options->sum('points');

       $user_id=Auth::user()->id;
       $result=Result::create([
        'user_id'=>$user_id,
        'category_id'=> $category_id,
        'total_points'=>$totalPoints
       ]);


        return redirect()->route('client.results.show', $result->id);
    }


    public function show($id){

     $result=Result::with(['user','category',])->where('id',$id)->first();





    return view('ui.resultshow', compact('result'));
    }
}
