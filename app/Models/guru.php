<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'guru'; // Pastikan nama tabel benar
    protected $primaryKey = 'idg'; // Tentukan primary key yang benar
    public $fillable = ['idg','namaguru','posisi','deskripsi','gambar'];
}
