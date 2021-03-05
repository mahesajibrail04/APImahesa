<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorigaleri extends Model
{
   
    protected $table='kategori_galeri';

    protected $fillable=[
        'nama','user_id'
    ];
    public function galeris(){
        return  $this->hasMany(   \App\models\galeri::class,  'kategori_galeri_id',);
           
       }
       public function user(){
        return  $this->belongsTo(  \App\models\user::class, 'users_id',);
           
       }
   
   
   
   
    use HasFactory;
}
