<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillable=[
       'id','nama','isi','users_id','kategori_pengumuman_id'
    ];
    public function kategoripengumumans(){
        return $this->belongsTo( \App\Models\kategoripengumuman::class,  'kategori_pengumuman_id',);
    }
    public function user(){
        return $this->belongsTo( \App\Models\user::class,  'users_id', );
    }
    
    
    
    use HasFactory;
}
