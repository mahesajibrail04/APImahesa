<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table='berita';

    protected $fillable=[
       'id','judul','isi','users_id','kategori_berita_id'
    ];
    public function kategoriberitas(){
        return $this->belongsTo( \App\Models\kategoriberita::class,  'kategori_berita_id',);
    }
    public function users(){
        return $this->belongsTo( \App\Models\user::class,  'users_id', );
    } 
   
    use HasFactory;
}
