<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class PostController extends Controller
{
    public function postList(){
      $posts=Post::with('user')->latest()->paginate(10);
      return view('Admin.adminpost.index',compact('posts'));

    }

    public function postCreate(){
      return view('Admin.adminpost.create');
    }

    public function postStore(Request $request){
       $data=$request->validate([
        "image"=>"required|image|mimes:png,jpg",
        "description"=>"required"
       ]);

       $image = $request->image;

       $imageName = uniqid() . '_' . $image->getClientOriginalName();
       $image->storeAs('public/posts-images', $imageName);
       $data['image'] = $imageName;
       $data['user_id']=Auth::user()->id;

       Post::create($data);

       return redirect()->route('admin.posts.list')->with('success','ပိုစ့်အသစ်တစ်ခုအောင်မြင်စွာပြုလုပ်ပီးပါပီ');

    }

    public function postDelete($id){
        Post::find($id)->delete();
        return back()->with('success','အောင်မြင်စွာဖျက်လိုက်ပါပီ');
    }

    public function postedit($id){
       $post=Post::find($id);
       return view('Admin.adminpost.edit',compact('post'));
    }

     public function postUpdate(Request $request,$id){

        $data=$request->validate([
            "description"=>"required",
            "image"=>"required|image|mimes:png,jpg"
        ]);
       $exist=Post::findOrfail($id);
       $existImage=$exist->image;
       if ($request->image) {
        File::delete('storage/posts-images/' . $existImage);

        // store a new image
        $image = $request->image;
        $imageName = uniqid() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/posts-images', $imageName);
        $data['image'] = $imageName;
    }

    // update the data
    $exist->update($data);
    return redirect()->route('admin.posts.list')->with('success', 'အောင်မြင်စွာပြောင်းလဲလိုက်ပါပီ!');


     }

     public function postShow(){
       $posts=Post::with('user')->get();
       return view('ui.posts',compact('posts'));

     }
}
