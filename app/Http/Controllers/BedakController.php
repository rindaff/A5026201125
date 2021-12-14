<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedakController extends Controller
{
    public function indexbedak()
{
     // mengambil data dari table pegawai
        $bedak = DB::table('bedak')->paginate(5);

        // mengirim data pegawai ke view index
        return view('bedak.indexbedak', ['bedak' => $bedak]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function add()
    {

        // memanggil view tambah
        return view('bedak.add');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('bedak')->insert([
        'merkbedak' => $request->merk,
		'stockbedak' => $request->stock,
		'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bedak');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bedak = DB::table('bedak')->where('kodebedak', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bedak.edit', ['bedak' => $bedak]);
    }
    //method untuk melihat detail data pegawai
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bedak = DB::table('bedak')->where('kodebedak', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bedak.detail', ['bedak' => $bedak]);
    }

    // update data pegawai
    public function update(Request $request)
    {

        // update data pegawai
        DB::table('bedak')->where('kodebedak', $request->id)->update([
        'merkbedak' => $request->merk,
		'stockbedak' => $request->stock,
        'tersedia'=> $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bedak');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('bedak')->where('kodebedak', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/bedak');
    }
    // method untuk cari data pegawai
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $bedak = DB::table('bedak')
            ->where('merkbedak', 'like', "%" . $cari . "%")
            ->orWhere('stockbedak', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('bedak.indexbedak', ['bedak' => $bedak]);
    }
}
