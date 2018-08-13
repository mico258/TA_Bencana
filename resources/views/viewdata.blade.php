@extends('layout.app')

    @section('content')
    <div class="container" style="background-color :#e0eaf9	; width : 100%">
    <div class="row">
        <div class="col-xs-6 col-md-12 ">
            <div class="panel panel-info" >




                <div class="panel-body"  style="background-color :#e0eaf9	;">

                  <select id="myInput" onchange="myFunction()" class="btn btn-secondary" style="background-color: #008CBA;color: white; margin: 10px">
                      <option value="Tanah Longsor">Tanah Longsor</option>
                      <option value="Gunung Api">Gunung Berapi</option>
                    </select>


                  <table  id="myTable" class="table table-striped table-bordered dt-responsive nowrap table-condensed" >
                          <thead id="dd">

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
                            <td> @convert($b->total_kerugian) </td>
                            </tr>
                            @endforeach




                          </tbody>
                      </table>





                </div>

            </div>
            </div>

    </div>
</div>
@endsection

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
