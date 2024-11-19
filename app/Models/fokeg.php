<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fokeg extends Model
{
    protected $table = 'fokeg'; // Pastikan nama tabel benar
    protected $primaryKey = 'idfo'; // Tentukan primary key yang benar
    public $fillable = ['idfo','judulfo','deskripsi','gambar'];
}