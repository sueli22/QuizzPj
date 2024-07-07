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

    public function deleteComment($id){
        $comment=Comment::find($id);
        if (!$comment) {
            return back()->with('error', 'ဒီတစ်ခါသင့်တွင်ကွန့်မန့်မရှိသေးပါ');
        }

        if ($comment->user->id == Auth::user()->id) {
            $comment->delete();
            return back()->with('success', 'သင့်ကွန့်မန့်ကို ဖျက်လိုက်ပါပီ');
        }

        return back()->with('error', 'သင့်သည်အခြားသူ၏ကွန့်မန့်ကိုဖျက်လို့မရနိုင်ပါ');
    }
}
