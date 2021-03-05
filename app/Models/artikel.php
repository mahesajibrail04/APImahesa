<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    
    //
    protected $table='artikel';

    protected $fillable=[
       'id','judul','isi','users_id','kategori_artikel_id'
    ];
    public function kategoriartikels(){
        return $this->belongsTo( \App\Models\kategoriartikel::class,  'kategori_artikel_id',);
    }
    public function users(){
        return $this->belongsTo( \App\Models\user::class,  'users_id', );
    }
    use HasFactory;
}
