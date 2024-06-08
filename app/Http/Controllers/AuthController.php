<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
           return view('ui.login');
    }

    public function register(){
        return view('ui.register');
 }
 //userstore

   public function userStore(Request $request){
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
    ]);

    User::create($data);

    return redirect()->route("login")->with("success", "You have successfully registered!");


   }
    //loginstore
   public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->intended('/');
                // return redirect()->route('home');
            }
        }

        return back()->with(['error' => 'Please check your credentials!'])->withInput($request->only('email'));

    }
    //logout()

    public function logout(){

        Auth::logout();
        return redirect()->route('home');

    }
}
