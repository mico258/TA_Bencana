@extends('layout.app')

      @section('content')
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    Kerugian Bencana
                </div>
                <style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>
                <div class="embed-container">
                  <!-- <small>
                    <a href="//www.arcgis.com/apps/Embed/index.html?webmap=52691e9d6fa244ceb50ebd79074bbd95&extent=93.3047,-15.1696,145.0723,13.0561&zoom=true&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a>
                  </small><br> -->
                  <iframe width="1000" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Peta Dasar" src="//www.arcgis.com/apps/Embed/index.html?webmap=52691e9d6fa244ceb50ebd79074bbd95&extent=93.3047,-15.1696,145.0723,13.0561&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light">
                  </iframe>
                </div>
                <!-- <iframe id="blockrandom" name="iframe" src="https://arcg.is/0eWLvH" width="100%" height="350" scrolling="no" class="wrapper">
	Opsi ini tidak akan bekerja dengan benar. Sayangnya, browser Anda tidak mendukung <i>inline frames</i>.</iframe> -->

            </div>
        </div>
      @endsection
