<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portefolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('welcome');
    }
    public function portefolio () {
        $data= Portefolio::all() ;
        return view('pages.portefolio' , compact('data'));
    }
     public function contact () {
        return view('pages.contact');
    }
     public function blog () {
         $table=Blog::all();
        return view('pages.blog',compact('table'));
    }
    public function dashboard () {
        return view('admin.blog_modif');
    }
}
