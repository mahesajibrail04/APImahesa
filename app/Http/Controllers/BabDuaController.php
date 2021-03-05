<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class BabDuaController extends Controller
{
    // //Soal 5
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan kategori galeri yang di awali dengan Aut
    public function a5(){
        $pengumumans=Pengumuman::whereHas('user', function ($query){
            $query->whereHas('galeris',function ($query){
                $query->whereHas('kategorigaleris',function ($query){
                    $query->where('name','like','Auth%');
                });
            });
        })->with('user.galeris.kategoriGaleri')->get();
        return $pengumumans;
    }
// //Soal 6
// //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga galeri
    public function a6(){
        $pengumumans=Pengumuman::whereHas('user', function ($q){
            $q->has('galeris')->has('beritas');

        })->first();

        return $pengumumans;
            

    }

}
