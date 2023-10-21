<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $judul = [
            'title' => 'About',
        ];
        return view('about',$judul);
       }
}
