<?php

namespace App\Http\Controllers;

use App\Models\Article;

class LandingController extends Controller {
    public function index() {
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('pages.landing.home', [

            'articles' => $articles,

        ]);
    }

    public function article() {
        $articles = Article::latest()->get();
        return view('pages.landing.article.all', [
            'articles' => $articles,
        ]);
    }

    public function article_detail($slug) {
        $articles = Article::latest()->limit(4)->get();
        $article  = Article::where('slug_judul', '=', $slug)->first();
        return view('pages.landing.article.detail', [
            'article'  => $article,
            'articles' => $articles,
        ]);
    }
}
