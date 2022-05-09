@extends('layouts.app')
@section('content')

    <section id="contentSection">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $getCanal->canal }}</h3>

                <video id='hls-example' class="video-js vjs-default-skin" style="width:100%; height:30em;" controls>
                    <source type="application/x-mpegURL" src="{{ $getCanal->link }}">
                </video>
                <br /><br />
            </div>
        </div>
    </section>


    <!-- JS code -->
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
    <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

    <script>
        var player = videojs('hls-example');
        player.play();

    </script>

@endsection
