<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Noticia::latest()->take(6)->get();

        return view('home', compact('latestNews'));
    }

    public function index2(){
        return view('otrahome');
    }
}
