<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Result;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UiController extends Controller
{

    public function questionQty($id){
        $category=Category::find($id);
        return view('ui.select.index',compact('category'));
    }
    public function learn(){
        return view('ui.learn');

    }
    public function aim(){
        return view('ui.aim');
    }
    public function contact(){
        return view('ui.contact');
    }
    public function about(){
        return view('ui.about');
    }


    public function profile()
    {
        $user = auth()->user();
        return view("ui.profile", compact('user'));
    }
    //To show categoriees to user panel
    public function userCategories(){

        $categories = Category::all();

        return view('ui.categories',compact('categories'));
    }

    //start test after choosing category
    public function testStart(Request $request, $id){

    $category = Category::with(['questions' => function ($query) {
        $query->inRandomOrder()
            ->take(10)
            ->with(['options' => function ($query) {
                $query->inRandomOrder();
            }]);
    }])->findOrFail($id);
       return view('ui.test', compact('category'));


    }

   


 //toshow results user already answered

 public function history(){
    $id=Auth::user()->id;
    $scores=Result::with(['user','category'])->where('user_id',$id)->paginate(5);


    return view('ui.history',compact('scores'));

 }

 public function photoUpdate(Request $request, $id)
 {
     $request->validate([
         'image' => 'required|image|mimes:png,jpg,jpeg',
     ]);
     $user = User::findOrFail($id);

     // delete image if exists


     // store image
     $image = $request->image;
     $imageName = uniqid() . '_' . $image->getClientOriginalName();
     $image->storeAs('public/images', $imageName);

     $user = User::findOrFail($id);

     $user->update([
         "image" => $imageName,
     ]);

     return redirect()->route("profile")->with("success", "Photo has uploaded successfully!");

 }

public function updatePassword($id){
    $id = Auth::user()->id;
        $user = User::find($id);
        return view('ui.pschange', compact('user'));
}

public function updateDonePassword(Request $request){
    $request->validate([
        "old_password"=>"required",
        "new_password"=>"required|min:8|confirmed"
    ]);

    if(!Hash::check($request->old_password,Auth::user()->password)){
        return back()->with('success','Password DoesNot Match');
    }

    $id=Auth::user()->id;
    User::where('id',$id)->update([
        "password"=>Hash::make($request->new_password)
    ]);
    return redirect()->route('profile')->with('success','Password Change Successfully');

}

public function sendMail(Request $request){
   $data=$request->validate([
    "subject"=>"required",
    "message"=>"required"
   ]);
   Contact::create([
    "user_id"=>Auth::user()->id,
    "subject"=>$request->input('subject'),
    "message"=>$request->input('message')
   ]);
   return redirect()->back()->with('success','Mailပို့ပေးပီးပါပီ');
}
}
