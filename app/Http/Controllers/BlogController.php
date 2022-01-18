<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $table=Blog::all() ;
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
        return redirect()-> route('blog.change') ;
    }

    public function modif () {
        $tableblog=Blog::all() ;
        return view('admin.blog_modif' , compact('tableblog')) ;
    }

    public function destroy(Blog $id) {
        $id->delete() ;
        return redirect()-> route('blog.change') ;
    }
    public function show (Blog $id) {
        $table= $id ;
        return view('pages.blogshow', compact('table')) ;
    }
    public function edit (Blog $id) {
        $data=$id ;
        return view('admin.edit.blog_edit' , compact('data')) ;
    }
    public function update (Blog $id , Request $request) {
        $table=$id ;
        $table->titre = $request->titre ;
        $table->image = $request->image;
        $table->description = $request->description ;
        $table->save() ;
        return redirect()->route('blog.change');

    }

}
