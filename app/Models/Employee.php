<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['officecode', 'city', 'phone', 'addressline1', 'addressline2', 'state', 'country', 'postalcode', 'teritory']; // Sesuaikan kolom yang ada di tabel 'offices'
}