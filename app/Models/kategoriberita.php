<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriberita extends Model
{
    protected $table='kategoriberita';

    protected $fillable=[
       'id','nama','users_id'
    ];
    public function beritas(){
        return $this->belongsTo( \App\Models\berita::class,  'kategori_berita_id',);
    }
    public function user(){
        return $this->belongsTo( \App\Models\user::class,  'users_id', );
    }
    
    use HasFactory;
}
