<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Option;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $students=User::all();
        $categories=Category::all();
        $answers=Option::all();
        $questions=Question::all();
        $scores=Result::all();
        $mails=Contact::all();

        return view('Admin.index',compact('students','categories','questions','answers','scores','mails'));
    }

    public function studentList(Request $request){
        $searchKey = $request->input('search');

        $students = User::where('role', 'user')
            ->when($searchKey, function ($query, $searchKey) {
                return $query->where(function ($query) use ($searchKey) {
                    $query->where('name', 'like', '%' . $searchKey . '%');

                });
            })
            ->latest()
            ->paginate(12);
        return view('Admin.student.index', compact('students'));
    }
    public function adminprofile(){
        $id=Auth::user()->id;
        $user=User::findOrfail($id);
        return view('Admin.profile.profile',compact('user'));
    }

    public function editProfile($id){
        $user=User::findOrfail($id);
        return view('Admin.profile.edit',compact('user'));
    }

    public function updateProflie(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id),
            ],
            'password' => 'required',
            'image' => 'nullable|image|mimes:jpg,png',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/profile-images', $imageName);
            $data['image'] = $imageName;
        }

        User::findOrFail($id)->update($data);
        return redirect()->route('profile.admin', $id);
    }

public function editPassword(){
  $id=Auth::user()->id;
  $user=User::find($id);
  return view('Admin.profile.editPassword',compact('user'));
}

public function changePassword(Request $request){

    $data=$request->validate([
        "old_password"=>"required",
        "new_password"=>"required|min:8|confirmed"
    ]);

    if(!Hash::check($request->old_password,Auth::user()->password)){
        return back()->with('success','Password DoesNot Match');
    }

    $id=Auth::user()->id;
    $user=User::where('id',$id)->update([
        "password"=>Hash::make($request->new_password)
    ]);
    return redirect()->route('admin.index')->with('success','Password Change Successfully');




}

public function studentDetails($id)
{
    $student = User::findOrFail($id);
    return view('Admin.student.details', compact('student'));
}

public function eachScore($id){
   $scores=Result::where('user_id',$id)->paginate(10);
   return view('Admin.score.index',compact('scores'));
}

}
