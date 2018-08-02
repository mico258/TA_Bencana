<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebGIS Bencana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/icomoon/styles.css')}}">


    </head>
    <div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-12 ">
            <div class="panel panel-info">




                <div class="panel-body">


                  <table  id="table-example" class="table table-striped table-bordered dt-responsive nowrap table-condensed">
                          <thead id="thead">

                          <tr>
                          <th rowspan="2" valign="middle">No</th>
                          <th rowspan="2" valign="middle">Jenis Bencana Alam</th>
                          <th rowspan="2" valign="middle">Waktu Kejadian</th>
                          <th rowspan="2" valign="middle">Bujur</th>
                          <th rowspan="2" valign="middle">Lintang</th>
                          <th rowspan="2" valign="middle">Desa/Kelurahan</th>
                          <th rowspan="2" valign="middle">Kecamatan</th>
                          <th rowspan="2" valign="middle">Kab/Kota</th>
                          <th rowspan="2" valign="middle">Provinsi</th>
                          <th rowspan="2" valign="middle">Korban</th>
                          <th colspan="3" align="center" style="text-align:center;">Kerugian</th>
                          <th rowspan="2" valign="middle">Total Kerugian</th>




                          </tr>
                          <tr style="height:30px;">
                          <th width="10px" valign="top">Infrastruktur</th>
                          <th>Ekonomi</th>
                          <th>Pemukiman</th>
                          </tr>

                          </thead>
                          <tbody>



                            @foreach($bencana as $b)

                            <tr>
                            <td>{{$b->id}} <br><a href="https://www.google.com/maps/search/{{$b->lintang}},{{$b->bujur}}/@0,0,3z/data=!3m1!4b1?hl=en-US" target="_blank"
                              title="Website name"><img src="{{asset('icon/location.png')}}" width="20" height="20" ></a></td>
                            <td>{{$b->tipe_bencana}} </td>
                            <td>{{$b->tahun}}-{{$b->bulan}}-{{$b->hari}}, {{$b->waktu}} </td>
                            <td>{{$b->bujur}} </td>
                            <td>{{$b->lintang}} </td>
                            <td>{{$b->desa_kelurahan}} </td>
                            <td>{{$b->kecamatan}} </td>
                            <td>{{$b->kota_kabupaten}} </td>
                            <td>{{$b->provinsi}} </td>
                            <td>{{$b->korban}} </td>
                            <td>{{$b->kerugian_infrastruktur}} </td>
                            <td>{{$b->kerugian_ekonomi}} </td>
                            <td>{{$b->kerugian_pemukiman}} </td>
                            <td>{{$b->total_kerugian}} </td>
                            </tr>
                            @endforeach




                          </tbody>
                      </table>





                </div>

            </div>
            </div>

    </div>
</div>

</html>
