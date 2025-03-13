<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        $content = "Selamat datang di halaman Home!";
        return view('pages.home', compact('title', 'content'));
    }

    public function about()
    {
        $title = "About Page";
        $content = "Ini adalah halaman About kami.";
        return view('pages.about', compact('title', 'content'));
    }

    public function contact()
    {
        $title = "Contact Page";
        $content = "Hubungi kami melalui halaman ini.";
        return view('pages.contact', compact('title', 'content'));
    }
}
