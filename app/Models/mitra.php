<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mitra extends Model
{
    protected $table = 'mitra'; // Pastikan nama tabel benar
    protected $primaryKey = 'idm'; // Tentukan primary key yang benar
    public $fillable = ['idm','namamit','deskripsi','gambar'];
}
