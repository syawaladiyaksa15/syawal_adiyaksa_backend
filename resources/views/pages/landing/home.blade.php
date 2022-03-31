@extends('layouts.landing.master')

@section('title','Beranda')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
@endsection

@section('content')
    {{-- <section style="width: 100%; height: 100px; flex-wrap: wrap;"></section> --}}

    <div class="main-banner">
    </div>

    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('app-assets/slider1.jpg') }}" class="d-block w-100" alt="gambar">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('app-assets/slider2.jpg') }}" class="d-block w-100" alt="gambar">
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>

    <section class="resources-area ptb-110">
        <div class="container">
            <div class="section-title">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="resources-slides owl-carousel owl-theme">

            @foreach($articles as $article)
                <div class="single-resources-box">
                    <div class="resources-image">
                        <a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}"><img src="{{ asset('storage/article/'.$article->foto) }}" alt="image" style="height: 250px;"></a>
                    </div>
                    <div class="resources-content">
                        <h3><a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}">{{ $article->judul }}</a></h3>
                        <a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}" class="learn-more-btn">Selengkapnya <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection

@section('script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
@endsection
