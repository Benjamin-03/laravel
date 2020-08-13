<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $category = Category::where('id', 3)->firstOrFail();
        return view('main.home');
    }
}
