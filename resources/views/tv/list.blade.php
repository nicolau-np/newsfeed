@extends('layouts.app')
@section('content')

    <section id="contentSection">
        <div class="row">
            @foreach ($getCanals as $canals)
                <div class="col-md-2">
                    <figure class="bsbig_fig">
                        <a href="/tv/view/{{ $canals->id }}" class="featured_img">
                            <img alt="img" src="{{ $canals->img }}" style="height: 10em;">
                            <span class="overlay"></span>
                        </a>
                        <figcaption>
                            <a href="/tv/view/{{ $canals->id }}">{{ $canals->canal }}</a>
                        </figcaption>

                    </figure>
                </div>
            @endforeach
        </div>
        <br /><br />
    </section>
@endsection
