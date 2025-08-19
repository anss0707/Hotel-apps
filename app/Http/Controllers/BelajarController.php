<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class BelajarController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->get();          //select all user
        return view('belajar', compact('users')); //
    }
//BELAJAR ARITMATIKA
    public function tambah()
    {
        return view('tambah');
    }
    public function kurang()
    {
        return view('kurang');
    }
    public function kali()
    {
        return view('kali');
    }
    public function bagi()
    {
        return view('bagi');
    }

    public function storeTambah(Request $request)
    {
        $satu = $request->angka1;
        $dua = $request->input('angka2');
        $jumlah = $satu + $dua;
        return view('tambah', compact('jumlah'));

    }

        public function storeKurang(Request $request)
    {
        $satu = $request->angka1;
        $dua = $request->input('angka2');
        $jumlah = $satu - $dua;
        return view('kurang', compact('jumlah'));
    }

        public function storeKali(Request $request)
    {
        $satu = $request->angka1;
        $dua = $request->input('angka2');
        $jumlah = $satu * $dua;
        return view('kali', compact('jumlah'));
    }

        public function storeBagi(Request $request)
    {
        $satu = $request->angka1;
        $dua = $request->input('angka2');
        $jumlah = $satu / $dua;
        return view('bagi', compact('jumlah'));
    }
}
