<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master_barang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function cariNamaBarang(Request $request)
    {
        $data = master_barang::firstWhere('id', $request->id);

        return response()->json($data);
    }

    public function cariHargaBarang(Request $request)
    {
        $data = master_barang::firstWhere('id', $request->id);

        return response()->json($data);
    }
}
