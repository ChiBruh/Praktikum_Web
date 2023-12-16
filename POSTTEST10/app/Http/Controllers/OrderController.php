<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showFormPenduduk()
    {
        return view('form');
    }

    public function submitData(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'nomor_telpon' => $request->input('nomor_telpon'),
        ];

        return view('dashboardPenduduk', compact('data'));
    }
}