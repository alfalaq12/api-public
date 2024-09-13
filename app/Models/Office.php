<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\OfficeController;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';
    protected $fillable = ['officecode', 'city', 'phone', 'addressline1', 'addressline2', 'state', 'country', 'postalcode', 'teritory']; // Sesuaikan kolom yang ada di tabel 'offices'
}