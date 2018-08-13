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
            $file->tahun =  $request->input('tahun_bencana');
            $file->bulan =  $request->input('bulan_bencana');
            $file->hari =  $request->input('hari_bencana');
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

    public function index(){
      $data['bencana'] = Bencana::get();
      return view('viewdata', $data);
    }

    public function welcome(){
      $data['bencana'] = Bencana::where('tipe_bencana', '=', 'Gunung Api')->get();

      $data['bencana_longsor'] = Bencana::where('tipe_bencana', '=', 'Tanah Longsor')->get();

      $result[] = ['Tahun','Kerugian (Rp)'];
        foreach ($data['bencana'] as $key => $value) {
            $result[++$key] = [$value->tahun, (int)$value->total_kerugian];
        }


        $result_gunung_api_korbanjiwa[] = ['Tahun','Korban Jiwa'];
          foreach ($data['bencana'] as $key => $value) {
              $result_gunung_api_korbanjiwa[++$key] = [$value->tahun, (int)$value->korban];
          }

          $result_longsor_kerugian[] = ['Tahun','Kerugian (Rp)'];
            foreach ($data['bencana_longsor'] as $key => $value) {
                $result_longsor_kerugian[++$key] = [$value->tahun, (int)$value->total_kerugian];
            }


            $result_tanah_longsor_korbanjiwa[] = ['Tahun','Korban Jiwa'];
              foreach ($data['bencana_longsor'] as $key => $value) {
                  $result_tanah_longsor_korbanjiwa[++$key] = [$value->tahun, (int)$value->korban];
              }

      return view('welcome')->with('bencana',json_encode($result))->
      with('korban_berapi',json_encode($result_gunung_api_korbanjiwa)) ->with('bencana_longsor',json_encode($result_longsor_kerugian))->with('korban_longsor',json_encode($result_tanah_longsor_korbanjiwa  ));;
    }


}
