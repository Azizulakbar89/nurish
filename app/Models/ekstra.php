<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
    protected $table = 'ekstra'; // Pastikan nama tabel benar
    protected $primaryKey = 'ide'; // Tentukan primary key yang benar
    public $fillable = ['ide','namaekstra','pukul','hari','deskripsi','gambar'];
}
