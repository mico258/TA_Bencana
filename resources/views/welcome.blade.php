@extends('layout.app')

      @section('content')
        <div class="flex-center position-ref full-height" style="background-color :#e0eaf9	;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content" >
                <div class="title m-b-md">
                    Kerugian Bencana
                </div><br>
                <style>.embed-container {position: center; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: relative; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>
                <div class="embed-container">
                  <!-- <small>
                    <a href="//www.arcgis.com/apps/Embed/index.html?webmap=52691e9d6fa244ceb50ebd79074bbd95&extent=93.3047,-15.1696,145.0723,13.0561&zoom=true&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a>
                  </small><br> -->
                  <iframe width="1000" height="600" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" title="Peta Dasar" src="//www.arcgis.com/apps/Embed/index.html?webmap=52691e9d6fa244ceb50ebd79074bbd95&extent=93.3047,-15.1696,145.0723,13.0561&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light">
                  </iframe>

                </div>



            </div>


        </div>
        <div class="content"   id="gunung_api" style="width: 50%; height: 500px ;float:left;"></div>
        <div class="content"   id="tanah_longsor" style="width: 50%; height: 500px ;float:right;"></div> <br>
        <div class="content"   id="linechart" style="width: 50%; height: 500px ;float:left;"></div>
        <div class="content"   id="kerugian_longsor" style="width: 50%; height: 500px ;float:right;"></div>
        <div class="content"   id="korban_bencana_gunungapi" style=" width: 50%; height: 500px ; float:left;"></div>

        <div class="content"   id="korban_tanah_longsor" style=" width: 50%; height: 500px ; float:right;"></div>



      @endsection




        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            var bencana1 = <?php echo $bencana1; ?>;
            var bencana = <?php echo $bencana; ?>;
            console.log(bencana1);
            var korban_berapi = <?php echo $korban_berapi; ?>;
            var bencana_longsor1 = <?php echo $bencana_longsor1; ?>;
            var bencana_longsor = <?php echo $bencana_longsor; ?>;
            var korban_longsor = <?php echo $korban_longsor; ?>;
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart1);
            google.charts.setOnLoadCallback(drawChart2);
            google.charts.setOnLoadCallback(drawChart_kerugian_berapi);
            google.charts.setOnLoadCallback(drawChart_korban_berapi);
            google.charts.setOnLoadCallback(drawChart_kerugian_longsor);
            google.charts.setOnLoadCallback(drawChart_korban_longsor);
            function drawChart1() {
              var data = google.visualization.arrayToDataTable(bencana1);
      //         var data = google.visualization.arrayToDataTable([
      //    ['Tahun', 'Jenis Bencana', 'Kerugian'],
      //    ['2004',  165,      938],
      //    ['2005',  135,      1120],
      //    ['2006',  157,      1167],
      //    ['2007',  139,      1110],
      //    ['2008',  136,      691]
      // ]);
              var options = {


                  backgroundColor: '#e0eaf9',
                  seriesType: 'bars',
                  title: 'Tren Bencana Gunung Berapi',
                  isStacked: true,
                  bars : 'horizontal',
                  colors: ['black'],


              };
              var chart = new google.visualization.ComboChart(document.getElementById('gunung_api'));
              chart.draw(data, options);
            }

            function drawChart2() {
              var data = google.visualization.arrayToDataTable(bencana_longsor1);
              var options = {


                  backgroundColor: '#e0eaf9',
                  seriesType: 'bars',
                  title: 'Tren Bencana Tanah Longsor',
                  isStacked: true,
                  bars : 'horizontal',
                  colors: ['green'],


              };
              var chart = new google.visualization.ComboChart(document.getElementById('tanah_longsor'));
              chart.draw(data, options);
            }

            function drawChart_kerugian_berapi() {
              var data = google.visualization.arrayToDataTable(bencana);
              var options = {
                backgroundColor: '#e0eaf9',
                title: 'Kurva Kerugian Bencana Gunung Berapi',
                curveType: 'function',
                colors: ['blue'],
                legend: { position: 'bottom' }
              };
              var chart = new google.visualization.LineChart(document.getElementById('linechart'));
              chart.draw(data, options);
            }
            function drawChart_korban_berapi() {
              var data = google.visualization.arrayToDataTable(korban_berapi);
              var options = {
                backgroundColor: '#e0eaf9',
                title: 'Kurva Korban Bencana Gunung Berapi',
                colors: ['red'],
                curveType: 'function',
                legend: { position: 'bottom' }
              };
              var chart = new google.visualization.LineChart(document.getElementById('korban_bencana_gunungapi'));
              chart.draw(data, options);
            }
            function drawChart_kerugian_longsor() {
              var data = google.visualization.arrayToDataTable(bencana_longsor);
              var options = {
                backgroundColor: '#e0eaf9',
                title: 'Kurva Kerugian Bencana Tanah Longsor',
                curveType: 'function',
                colors: ['green'],
                legend: { position: 'bottom' }
              };
              var chart = new google.visualization.LineChart(document.getElementById('kerugian_longsor'));
              chart.draw(data, options);
            }
            function drawChart_korban_longsor() {
              var data = google.visualization.arrayToDataTable(korban_longsor);
              var options = {
                backgroundColor: '#e0eaf9',
                title: 'Kurva Korban BencanaTanah Longsor',
                colors: ['yellow'],
                curveType: 'function',
                legend: { position: 'bottom' }
              };
              var chart = new google.visualization.LineChart(document.getElementById('korban_tanah_longsor'));
              chart.draw(data, options);
            }



          </script>
