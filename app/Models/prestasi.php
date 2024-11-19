<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table = 'prestasi'; // Pastikan nama tabel benar
    protected $primaryKey = 'idp'; // Tentukan primary key yang benar
    public $fillable = ['idp','namaprestasi','tingkatprestasi','namasiswa','deskripsi','gambar'];
}