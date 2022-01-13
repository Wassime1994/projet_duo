<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('welcome');
    }
    public function portefolio () {
        return view('pages.portefolio');
    }
     public function contact () {
        return view('pages.contact');
    }
     public function blog () {
         $table=Blog::all();
        return view('pages.blog',compact('table'));
    }
    public function dashboard () {
        return view('admin.dashboard');
    }
}
