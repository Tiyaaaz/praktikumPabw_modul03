<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $laporan = [
            'nama'   => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => (int) $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporans = [
            ['nama' => 'Budi Santoso', 'lokasi' => 'Dayeuhkolot', 'tinggi' => 15],
            ['nama' => 'Siti Aminah',  'lokasi' => 'Baleendah',   'tinggi' => 45],
            ['nama' => 'Ahmad Fauzi',  'lokasi' => 'Bojongsoang', 'tinggi' => 85],
        ];

        return view('laporan.index', compact('laporans'));
    }
}