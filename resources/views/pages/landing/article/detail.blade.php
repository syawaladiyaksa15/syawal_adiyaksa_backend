@extends('layouts.landing.master')

@section('title')
    {{ $article->judul }}
@endsection

@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $article->judul }}</h2>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li>Article</li>
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

    <section class="blog-details-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="article-image">
                            <img src="{{ asset('storage/article/'.$article->foto) }}" alt="image">
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Tanggal Post :</span> <a href="#">{{ date('d-m-Y',strtotime($article->created_at)) }}</a></li>
                                    @php
                                        $creator = App\Models\User::where('id','=',$article->user_id)->first();
                                    @endphp
                                    <li><span>Oleh :</span> <a href="#">{{ $creator->name }}</a></li>
                                </ul>
                            </div>
                            <h3>{{ $article->judul }}</h3>
                            {!! $article->isi !!}
                        </div>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-bookmark"></i></span>
                                <a href="#">ARTIKEL CMS</a>
                            </div>
                            <div class="article-share">
                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </section>
                        <section class="widget widget_evolta_posts_thumb">
                            <h3 class="widget-title">Terbaru</h3>

                            @foreach($articles as $article)
                                <article class="item">
                                    <a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}" class="thumb">
                                        <span class="fullimage cover" style="background-image: url({{ asset('storage/article/'.$article->foto) }})" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="{{ date('d-m-Y',strtotime($article->created_at)) }}">{{ date('d-m-Y',strtotime($article->created_at)) }}</time>
                                        <h4 class="title usmall"><a href="{{ route('landing.detail.article',['slug' => $article->slug_judul]) }}">{{ $article->judul }}</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                            @endforeach
                        </section>
                        <section class="widget widget_categories">
                            <h3 class="widget-title">Kategori Artikel</h3>
                            <ul>
                                <li><a href="">Teknologi</a></li>
                                <li><a href="">Budaya</a></li>
                            </ul>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection




