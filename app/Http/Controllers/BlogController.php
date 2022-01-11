<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('admin.blog');
    }
    public function create () {
        return view('admin.blog')  ;
    }
    public function store (Request $request){
        $table= new Blog();
        $table->titre=$request->titre ;
        $table->image=$request->image ;
        $table->description=$request->description ;
        $table->save() ;
        redirect()->route('home') ;
    }
}
