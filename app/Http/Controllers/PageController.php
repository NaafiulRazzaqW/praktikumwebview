<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index (){
    Return "Selamat Datang";
   } 

   public function user(){
    $data = [
        'nama' => 'Muhammad Naafiul Razzaq Witjaksono',
        'alamat' => 'Sidoarjo',
        'nohp' => '082257344'
    ];
    return view('User', $data);
   }

   

  
}
