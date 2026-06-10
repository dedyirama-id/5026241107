<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjangBelanja = DB::table('keranjangbelanja')->get();
        return view('keranjangbelanja.index', ["keranjangbelanja" => $keranjangBelanja]);
    }

    public function tambah()
    {
        return view('keranjangbelanja.tambah');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/keranjangbelanja');
    }
    
}
