<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function studentList(){
        $students=User::where('role','user')->paginate(10);

        return view('Admin.student.index',compact('students'));

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

        $image = $request->file('image');
        $imageName = uniqid() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/profile-images', $imageName);
        $data['image'] = $imageName;
        User::findOrFail($id)->update($data);
        return redirect()->route('profile.admin', $id);
    }



}
