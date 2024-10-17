<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaanModel extends Model
{
    public $timestamps = false;
    public $primaryKey = "id_sewa";
    public $table = "penyewaan";
    public $fillable = [
        "id_sewa", "noplat", "nik", "tgl_pinjam", "tgl_kembali" 
    ];
}
