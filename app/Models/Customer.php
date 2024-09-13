<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (opsional)
    protected $table = 'customers';

    // Tentukan kolom-kolom yang bisa diisi secara massal (mass assignable)
   // protected $fillable = ['name', 'phone', 'email']; // Sesuaikan dengan kolom di tabel
}
