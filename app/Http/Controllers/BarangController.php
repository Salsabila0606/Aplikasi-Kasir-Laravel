<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master_barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = DB::table('master_barang')->get();
        return view('barang', ['barangs' => $barangs]);
    }
}
