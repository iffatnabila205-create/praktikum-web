<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{

    protected $laporans = [
        ['nama_pelapor' => 'nabila cantik', 'lokasi' => 'kota bekasi',    'tinggi_genangan' => 25],
    ];

    public function index()
    {
        return view('laporbanjir.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor'    => 'required|string|max:100',
            'lokasi'          => 'required|string|max:150',
            'tinggi_genangan' => 'required|numeric|min:0',
        ]);

        return view('laporbanjir.konfirmasi', $validated);
    }

    public function daftar()
    {
        return view('laporbanjir.daftar', [
            'laporans' => $this->laporans,
        ]);
    }
}
