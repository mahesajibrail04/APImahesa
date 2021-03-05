<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoripengumuman extends Model
{
    protected $table='kategori_pengumuman';

    protected $fillable=[
        'nama','user_id'
    ];
    public function pengumumans(){
        return  $this->hasMany(   \App\models\pengumuman::class,  'kategori_pengumuman_id',);
           
       }
       public function user(){
        return  $this->belongsTo(  \App\models\user::class, 'users_id',);
           
       }
    
    use HasFactory;
}
