<?php

namespace App\Http\Controllers;

use App\bencana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BencanaController extends Controller
{
    public function store(Request $request) {

        $file = new Bencana;
            $file->tipe_bencana = $request->input('tipe_bencana');
            $file->waktu =  $request->input('waktu_bencana');
            $file->bujur =  $request->input('bujur_bencana');
            $file->lintang =  $request->input('lintang_bencana');
            $file->desa_kelurahan =  $request->input('desa_kelurahan_bencana');
            $file->kecamatan =  $request->input('kecamatan_bencana');
            $file->kota_kabupaten =  $request->input('kota_kabupaten_bencana');
            $file->provinsi =  $request->input('provinsi_bencana');
            $file->korban =  $request->input('korban_bencana');
            $file->provinsi =  $request->input('provinsi_bencana');
            $file->kerugian_infrastruktur =  $request->input('kerugian_infrastruktur_bencana');
            $file->kerugian_ekonomi =  $request->input('kerugian_ekonomi_bencana');
            $file->kerugian_pemukiman =  $request->input('kerugian_pemukiman_bencana');
            $file->total_kerugian =  $request->input('total_kerugian_bencana');
       $file->save();
      return view('adddata');
    }


}
