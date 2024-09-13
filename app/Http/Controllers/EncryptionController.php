<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    public function encryptData(Request $request)
    {
        $data = $request->input('data');  // Ambil data dari request
        $encrypted = Crypt::encryptString($data);  // Enkripsi data

        return response()->json(['encrypted' => $encrypted]);  // Kembalikan hasil enkripsi dalam JSON
    }
}