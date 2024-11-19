<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table = 'video'; // Pastikan nama tabel benar
    protected $primaryKey = 'idvid'; // Tentukan primary key yang benar
    public $fillable = ['idvid','judul','kelas','link'];
}
