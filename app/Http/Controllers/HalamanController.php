<?php

namespace App\Http\Controllers;

class HalamanController extends Controller
{
    public function index()
    {
        $nama = "Aldi Maulana";
        $nim = "251011700930";
        $prodi = "Sistem Informasi";
        $judul = "Tugas Rekayasa Web";

        return view('beranda', compact('nama', 'nim', 'prodi', 'judul'));
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('home');
    }
}