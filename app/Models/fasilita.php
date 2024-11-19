<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fasilita extends Model
{
    protected $table = 'fasilitas'; // Pastikan nama tabel benar
    protected $primaryKey = 'idfas'; // Tentukan primary key yang benar
    public $fillable = ['idfas','namafas','jmlfas','gambar'];
}
