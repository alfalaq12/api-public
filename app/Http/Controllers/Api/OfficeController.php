<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 
use App\Models\Office;
use Illuminate\Http\Request;


class OfficeController extends Controller
{
    // Metode untuk mendapatkan dan mengenkripsi data dari tabel 'offices'
    public function getEncryptedOffices()
    {
        $offices = Office::all(); // Ambil semua data dari tabel 'offices'

        // Mengenkripsi data dari setiap office
        $encryptedOffices = $offices->map(function ($office) {
            $office->column1 = encrypt($office->column1);   
            $office->column2 = encrypt($office->column2);
            return $office;
        });

        return response()->json($encryptedOffices); // Kembalikan dalam bentuk JSON
    }
}