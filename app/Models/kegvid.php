<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegvid extends Model
{
    protected $table = 'kegvid'; // Pastikan nama tabel benar
    protected $primaryKey = 'idkeg'; // Tentukan primary key yang benar
    public $fillable = ['idkeg','judul','deskripsi','tgl','link'];
}
