<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    // Metode untuk mendapatkan dan mengenkripsi data dari tabel 'employees'
    public function getEncryptedemployees()
    {
        $employees = Employee::all(); // Ambil semua data dari tabel 'employees'

        // Mengenkripsi data dari setiap empl$employe
        $encryptedemployees = $employees->map(function ($employee) {
            $employee->column1 = encrypt($employee->column1);   
            $employee->column2 = encrypt($employee->column2);
            return $employee;
        });

        return response()->json($encryptedemployees); // Kembalikan dalam bentuk JSON
    }
}
