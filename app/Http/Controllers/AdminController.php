<?php

namespace App\Http\Controllers;
use App\Models\User;

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
}
