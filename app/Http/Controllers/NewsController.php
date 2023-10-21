<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsdetail($judul){
        $data = [
            'judul' => $judul,
            'title' => 'News'
        ];
        
        return view('news',$data);
    }

    public function news(){
        return view('news', ['title' => 'News']);
    }
}
