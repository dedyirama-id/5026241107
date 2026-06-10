<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenDBController extends Controller
{
    public function index()
    {
        $bolpen = DB::table('bolpen')->paginate(10);

        return view('bolpen.index', ['bolpen' => $bolpen]);
    }

    public function tambah()
    {
        return view('bolpen.tambah');
    }

    public function store(Request $request)
    {
        DB::table('bolpen')->insert([
            'merkbolpen' => $request->merkbolpen,
            'stockbolpen' => $request->stockbolpen,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bolpen');
    }

    public function edit($id)
    {
        $bolpen = DB::table('bolpen')->where('kodebolpen', $id)->get();
        return view('bolpen.edit', ['bolpen' => $bolpen]);
    }

    public function update(Request $request)
    {
        DB::table('bolpen')->where('kodebolpen', $request->id)->update([
            'merkbolpen' => $request->merkbolpen,
            'stockbolpen' => $request->stockbolpen,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bolpen');
    }

    public function hapus($id)
    {
        DB::table('bolpen')->where('kodebolpen', $id)->delete();

        return redirect('/bolpen');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $bolpen = DB::table('bolpen')
            ->where('merkbolpen', 'like', "%" . $cari . "%")
            ->paginate();

        return view('bolpen.index', ['bolpen' => $bolpen]);
    }
}
