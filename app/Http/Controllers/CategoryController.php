<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function categories(){
        $categories=Category::all();
        return view('Admin.category.index',compact('categories'));
     }

     //addCategory

     public function add(){
        return view('Admin.category.add');
     }
     //storeCategoey

     public function store(Request $request){
         $data=$request->validate([
            'name'=>'required|unique:categories,name'

         ]);

         Category::create($data);

         return redirect()->route('categories')->with('success','Created');
     }
     //deleteCategory

     public function delete($id){

        Category::find($id)->delete();
        return redirect()->route('categories')->with('success','Delete');

     }
     //edit
     public function edit($id){
        $category=Category::find($id);
        return view('Admin.category.edit',compact('category'));
     }

     //update

     public function update(Request $request,$id){
        $data=$request->validate([
            'name'=>'required'
        ]);
        Category::findOrfail($id)->update($data);
        return redirect()->route('categories')->with('success','Updated');

     }
}
