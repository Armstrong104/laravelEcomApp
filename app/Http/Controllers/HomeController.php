<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.index',['categories' => Category::all()]);
    }
}
