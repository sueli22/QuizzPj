<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use FontLib\Table\Type\post as TypePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentStore(Request $request){
       $data=$request->validate([
        "comment"=>"required"
       ]);
       $data["user_id"]=Auth::user()->id;
       $data["post_id"]=$request->input('post_id');
       $data=Comment::create($data);
       return back()->with('success','ကွန့်မန့် မန့်ပီးပါပီ');

    }

    public function commentList($id){
        $post =Post::find($id);
        $comments = Comment::with('user')->where('post_id',$id)->latest()->get();
       return view('ui.comments',compact('post','comments'));
    }
}
