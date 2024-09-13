<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer; // Import model Customer
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Metode untuk mendapatkan dan mengenkripsi data dari tabel 'customers'
    public function getEncryptedCustomers()
    {
        // Mengambil semua data dari tabel 'customers'
        $customers = Customer::all();

        // Jika data kosong, kembalikan pesan error
        if ($customers->isEmpty()) {
            return response()->json(['message' => 'No customers found'], 404);
        }

        // Mengenkripsi data
        $encryptedCustomers = $customers->map(function ($customer) {
            // Mengenkripsi data yang diinginkan, misal kolom 'phone'
            $customer->phone = encrypt($customer->phone);
            // Tambahkan kolom lainnya jika perlu
            return $customer;
        });

        // Mengembalikan data yang sudah terenkripsi
        return response()->json($encryptedCustomers);
    }
}
