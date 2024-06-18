<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use Illuminate\Http\Request;

class HomeCekController extends Controller
{
    //

    function cek()
    {
        $data = [
            'content'   => 'home.cek'
        ];
        return view('home.layouts.wrapper', $data);
    }
    function cekProses()
    {
        $nisn = request('nisn');
        $tanggal_lahir = request('tanggal_lahir');

        $calon = Calon::with('jurusan')->whereNisn($nisn)->whereTanggalLahir($tanggal_lahir)->first();
        $data = [
            'calon'     => $calon,
            'content'   => 'home.hasil'
        ];
        return view('home.layouts.wrapper', $data);
    }
}
