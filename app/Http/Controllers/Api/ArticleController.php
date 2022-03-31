<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller {
    public $successStatus = 200;

    public function index() {
        return ArticleResource::collection(Article::paginate(15));
    }

    public function store(Request $request) {

        $this->validate($request, [
            'judul' => 'required|unique:articles,judul',
            'isi'   => 'required|min:10',
        ]);

        if ($request->hasFile('foto')) {
            $foto     = $request->file('foto');
            $filename = time() . "." . $foto->getClientOriginalExtension();
            $request->foto->storeAs('article', $filename);
        } else {
            $filename = 'default.jpg';
        }

        $article             = new Article;
        $article->user_id    = $request->user_id;
        $article->judul      = $request->judul;
        $article->slug_judul = Str::slug($request->judul, '-');
        $article->isi        = $request->isi;
        $article->foto       = $filename;
        $article->save();

        return response([
            'data' => new ArticleResource($article),
        ], 201);
    }

    public function detail(Article $article) {
        return new ArticleResource($article);
    }

    public function update(Request $request, $article) {

        $this->validate($request, [
            'judul' => 'required|unique:articles,judul,' . $article,
            'isi'   => 'required|min:5',
        ]);

        $dataOld = Article::where('id', '=', $article)->first();

        if ($request->hasFile('foto')) {
            $foto     = $request->file('foto');
            $filename = time() . "." . $foto->getClientOriginalExtension();
            $request->foto->storeAs('article', $filename);

            if ($dataOld->foto != 'default.jpg') {
                Storage::delete('article/' . $dataOld->foto);
            }
        } else {
            $filename = $dataOld->foto;
        }

        $update             = Article::find($article);
        $update->judul      = $request->judul;
        $update->slug_judul = Str::slug($request->judul, '-');
        $update->isi        = $request->isi;
        $update->foto       = $filename;
        $update->save();

        return response([
            'data' => new ArticleResource($update),
        ], 201);
    }

    public function destroy(Article $article) {
        $article->delete();
        return response(null);
    }
}
