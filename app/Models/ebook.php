<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ebook extends Model
{
    protected $table = 'ebook'; // Pastikan nama tabel benar
    protected $primaryKey = 'idb'; // Tentukan primary key yang benar
    public $fillable = ['idb','judul','kelas','dokumen'];
}