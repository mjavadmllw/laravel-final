<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Session;

class postcontroller extends Controller
{
    //
    function loadposts(){
        $posts=post::all();
        return view('home',['posts'=>$posts->reverse()]);
    }

    function makepost(){
        if(Session::has('user')){
            return view('makepost');
        }else{
            return view('login');
        }
    }

    function posting(Request $req){
        $user_id=Session::get('user')['id'];
        $user_name= Session::get('user')['name'];
        $text=$req->input('text');

        $post=new post;
        $post->user_id=$user_id;
        $post->name=$user_name;
        $post->text=$text;
        $post->save();

        return redirect('/');
    }

    function view_post($id){
        if(Session::has('user')){
            $post_data=post::find($id);
            return view('posts',['post_data'=>$post_data]);
        }else{
            return view('login');
        }
        
    }

    function delete_post($id){
        $post_data=post::find($id);
        $post_id=$post_data['id'];
        post::where('id',$post_id)->delete();

        return redirect('/');
    }

    function search(Request $req){
        $query=$req->input('query');
        $data=post::where('text','like','%'.$query.'%')->get();
        return view("search",['data'=>$data]);
    }
}
