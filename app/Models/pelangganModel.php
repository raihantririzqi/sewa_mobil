<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelangganModel extends Model
{
    public $timestamps = false;
    public $primaryKey = "nik";
    public $table = "pelanggan";
    public $fillable = [
        'nik', 'nama', 'alamat', 'telepon'
    ];
}
