<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepsek extends Model
{
    protected $table = 'kepsek'; // Pastikan nama tabel benar
    protected $primaryKey = 'idk'; // Tentukan primary key yang benar
    public $fillable = ['idk','namakep','sambutan','gambar'];
}