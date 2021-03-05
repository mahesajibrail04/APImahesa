<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeri';

    protected $fillable=[
       'id','nama','keterangan','path','users_id','kategori_galeri_id'
    ];
    public function kategorigaleris(){
        return $this->belongsTo( \App\Models\kategorigaleri::class,  'kategori_galeri_id',);
    }
    public function user(){
        return $this->belongsTo( \App\Models\user::class,  'users_id', );
    }
    
    
    
    
    
    use HasFactory;
}
