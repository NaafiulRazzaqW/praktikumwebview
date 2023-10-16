<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index (){
    Return "Selamat Datang";
   } 

   public function about(){
    return "NIM: 2121770006 <br>
            NAMA: MUHAMMAD NAAFIUL RAZZAQ WITJAKSONO";
   }

   public function articles($id){
    return "Halaman Artikel dengan ID $id";
   }
}
