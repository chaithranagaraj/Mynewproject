<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;

class demoController extends Controller
{
    public function get_login(){
    	if(Auth::check()){
    		return redirect('/home');
    	}
    	return view('welcome');
    }
    public function get_new_post(Request $request){
    	return view('post');
    }
     public function add_new_post(Request $request)
    {
    	
    	$post = New post;
    	$post->user_id = Auth::user()->id;
    	$post->title = $request->title;
    	$post->content = $request->content;
    	$post->save();
    	return redirect()->back()->with('Success','post added successfully');
    }
    public function delete_post($id){
    	post::where('id',$id)->delete();
    	return redirect()->back()->with('Success','post deleted');
    }
    public function view_post($id){
    	$post = post::where('id',$id)->first();
    	return view('view',['post'=>$post]);
    }
    public function save_edit(Request $request){
    post::where('id',$request->id)->update([
    	'title' => $request->title,
    	'content' =>$request->content
    ]);
    	return redirect()->back()->with('Success','post updated successfully');
    }
}
