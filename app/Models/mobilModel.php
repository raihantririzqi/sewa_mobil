<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobilModel extends Model
{
    public $timestamps = false;
    public $table = "mobil";
    public $fillable = [
        'noplat', 'type', 'merk', 'warna'
    ];
}
