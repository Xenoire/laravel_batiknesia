<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'namaProduk', 'dimensi', 'deskripsi', 'jumlahLike', 'stock', 'idJenis', 'harga',
  ];

  public function jenis(){
    return $this->hasOne('App\Jenis');
  }

  public function gambar(){
    return $this->hasMany('App\Gambar');
  }

  public function like(){
    return $this->hasMany('App\Like');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
