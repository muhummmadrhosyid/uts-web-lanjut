<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Datapenduduk extends Controller
{
    public function data()
    {
        $datapenduduk = DB::table('datapenduduk')->get();
        return view('tampil_penduduk.data', ['datapenduduk' => $datapenduduk]);
    }

    public function add()
    {
        return view('tampil_penduduk.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:2',
            'name' => 'required|min:2',
            'desc' => 'required'
        ]);

        DB::table('datapenduduk')->insert([
            'nik' => $request->nik,
            'name' => $request->name,
            'desc' => $request->desc
        ]);

        return redirect('data/penduduk')->with('status', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $data_p = DB::table('datapenduduk')->where('id', $id)->first();
        return view('tampil_penduduk.edit', compact('data_p'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('datapenduduk')->where('id', $id)
            ->update([
                'nik' => $request->nik,
                'name' => $request->name,
                'desc' => $request->desc
            ]);
        return redirect('data/penduduk')->with('status', 'Data berhasil diedit!');
    }
    public function delete($id)
    {
        DB::table('datapenduduk')->where('id', $id)->delete();
        return redirect('data/penduduk')->with('status', 'Data berhasil dihapus!');
    }
}
