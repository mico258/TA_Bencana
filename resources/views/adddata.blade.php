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

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">Add Data Bencana <a href="/admin/logout" style="margin-left: 70%"><button type="button" class="btn btn-danger" >Logout</button></a></div>



                <div class="panel-body">


                    <form action="/add_data_to_db" method="post" enctype="multipart/form-data">

                        <label for="tipe_bencana"> Tipe Bencana :</label><br>
                        <input type="radio" name="tipe_bencana" value="longsor"> Longsor <br>
                        <input type="radio" name="tipe_bencana" value="gunungberapi"> Gunung Api<br>
                        <br>

                        <label for="tahun_bencana"> Tahun :</label>
                        <input type="text" name="tahun_bencana" class="form-control">
                        <br>

                        <label for="bulan_bencana"> Bulan :</label>
                        <input type="text" name="bulan_bencana" class="form-control">
                        <br>

                        <label for="hari_bencana"> Hari :</label>
                        <input type="text" name="hari_bencana" class="form-control">
                        <br>

                        <label for="lintang_bencana"> Waktu :</label>
                        <input type="text" name="waktu_bencana" class="form-control">
                        <br>

                        <label for="lintang_bencana"> Posisi Lintang :</label>
                        <input type="number" step="0.001" name="lintang_bencana" class="form-control">
                        <br>

                        <label for="bujur_bencana"> Posisi Bujur :</label>
                        <input type="number" step="0.001" name="bujur_bencana" class="form-control">
                        <br>

                        <label for="desa_kelurahan_bencana"> Desa/Kelurahan :</label>
                        <input type="text" name="desa_kelurahan_bencana" class="form-control">
                        <br>

                        <label for="kecamatan_bencana"> Kecamatan :</label>
                        <input type="text" name="kecamatan_bencana" class="form-control">
                        <br>

                        <label for="kota_kabupaten_bencana"> Kota Kabupaten  :</label>
                        <input type="text" name="kota_kabupaten_bencana" class="form-control">
                        <br>

                        <label for="provinsi_bencana"> Provinsi :</label>
                        <input type="text" name="provinsi_bencana" class="form-control">
                        <br>

                        <label for="korban_bencana"> Korban :</label>
                        <input type="number" name="korban_bencana" class="form-control">
                        <br>

                        <label for="kerugian_infrastruktur_bencana"> Kerugian Infrastuktur :</label>
                        <input type="text" name="kerugian_infrastruktur_bencana" class="form-control">
                        <br>

                        <label for="kerugian_ekonomi_bencana"> Kerugian Ekonomi :</label>
                        <input type="number" name="kerugian_ekonomi_bencana" class="form-control">
                        <br>

                        <label for="kerugian_pemukiman_bencana"> Kerugian Pemukiman :</label>
                        <input type="text" name="kerugian_pemukiman_bencana" class="form-control">
                        <br>

                        <label for="total_kerugian_bencana"> Total Kerugian :</label>
                        <input type="number" name="total_kerugian_bencana" class="form-control">
                        <br>


                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top: 10px;">


                        {{csrf_field()}}
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>
</html>
