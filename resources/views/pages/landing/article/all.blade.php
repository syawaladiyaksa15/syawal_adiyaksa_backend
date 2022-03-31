@extends('layouts.landing.master')

@section('title','Article')

@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Articles</h2>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li>Articles</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="shape3"><img src="{{ asset('app-assets/landing/assets/img/shape/1.svg') }}" alt="image"></div>
    </div>

    <section class="blog-area ptb-110">
        <div class="container">
            <div class="row">

                @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="entry-thumbnail">
                                <a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}"><img src="{{ asset('storage/article/'.$article->foto) }}" alt="image" style="height: 270px; width: 100%;"></a>
                            </div>
                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        @php
                                            $creator = App\Models\User::where('id','=',$article->user_id)->first();
                                        @endphp
                                        <li><a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}">{{ $creator->name }}</a></li>
                                        <li>{{ date('d-m-Y',strtotime($article->created_at)) }}</li>
                                    </ul>
                                </div>
                                <h3><a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}">{{ $article->judul }}</a></h3>
                                <a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}" class="learn-more-btn">Selengkapnya <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
