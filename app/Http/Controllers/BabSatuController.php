<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\artikel;
use App\models\pengumuman;

class BabSatuController extends Controller
{
    //Soal 1
    //Tampilkan artikel dengan id=17 dan users_id=160
    public function a1(){
        $artikels=Artikel::where('id',2)->where('users_id',1)->get();

        return $artikels;
    }

    //Soal 2
    //Tampilkan artikel dengan id=2 atau id=5
    public function a2(){
        $artikels=Artikel::where('id',2)->orWhere('id',5)->get();
        return $artikels;
    }

    // //Soal 3
    //Tampilkan artikel dengan id=3 dan user dengan nama  =Aslijan Megantara
    public function a3(){
        $artikels=Artikel::where('id',3)->whereHas('users',function($query){
            $query->where('name','Aslijan Megantara');
        })->get();
        return $artikels;
    }
    // //Soal 4
     //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
     public function a4(){
         $pengumumans=Pengumuman::whereHas('user',function($query){
             $query->whereHas('galeris',function ($query){
                 $query->where('id',269);
             });
         })->get();

         return $pengumumans;

     }

     
        
}
