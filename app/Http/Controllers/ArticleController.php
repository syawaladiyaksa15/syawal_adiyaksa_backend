<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller {
    public function index() {
        $c = Article::where('user_id', '=', Auth::user()->id)->get();

        return view('pages.author.article.all', [
            'c' => $c,
        ]);
    }

    // **
    // handler slider datatable
    public function datatable() {

        $result = Article::where('user_id', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();

        $no = 0;
        foreach ($result as $value) {
            $no++;
            $row = [];

            $row[] = $no;

            $row[] = '<img src="' . asset('storage/article/' . $value->foto) . '" alt="" style="max-width: 90px; filter: drop-shadow(3px 10px 4px black);">';

            $row[] = ucwords($value->judul);

            $row[] = '<a href="' . route('dashboard.article.edit', ['id' => $value->id]) . '" title="Edit" class="btn btn-sm btn-primary" style="filter: drop-shadow(3px 10px 4px black);"><i class="ti-pencil-alt"></i> edit</a>&nbsp;
                <a href="javascript:void" onclick="delData(' . $value->id . ')" style="filter: drop-shadow(3px 10px 4px black);" title="Delete" class="btn btn-sm btn-danger"><i class="ti-trash"></i>hapus</a>
                ';

            $data[] = $row;
        }
        // return DataTables::of($data)->escapeColumns([])->make(true);
        $output = ['data' => $data];
        return response()->json($output);
    }

    public function create() {

        return view('pages.author.article.create');
    }

    public function store(Request $request) {
        // **
        // handler validation
        $this->validate($request, [
            'judul' => 'required|unique:articles,judul',
            'isi'   => 'required|min:10',
            'foto'  => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $foto     = $request->file('foto');
            $filename = time() . "." . $foto->getClientOriginalExtension();
            $request->foto->storeAs('article', $filename);
        } else {
            $filename = 'default.jpg';
        }

        $insert = Article::create([
            'user_id'    => Auth::user()->id,
            'judul'      => ucwords($request->judul),
            'slug_judul' => Str::slug($request->judul, '-'),
            'isi'        => $request->isi,
            'foto'       => $filename,
        ]);

        if ($insert) {
            return redirect()->route('dashboard.article.all')->with('success', 'Simpan Data Berhasil');
        } else {
            return redirect()->back()->with('error', 'Simpan Data gagal');
        }
    }

    public function edit($id) {
        $r = Article::where('id', '=', $id)->first();

        return view('pages.author.article.edit', [
            'result' => $r,
        ]);
    }

    public function update(Request $request, $id) {
        // **
        // handler validation
        $this->validate($request, [
            'judul' => 'required|unique:articles,judul,' . $id,
            'isi'   => 'required|min:10',
        ]);

        $dataOld = Article::where('id', '=', $id)->first();

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

        $update = Article::where('id', '=', $id)->update([
            'judul'      => ucwords($request->judul),
            'slug_judul' => Str::slug($request->judul, '-'),
            'isi'        => $request->isi,
            'foto'       => $filename,
        ]);

        if ($update) {
            return redirect()->route('dashboard.article.all')->with('success', 'Ubah Data Berhasil');
        } else {
            return redirect()->back()->with('error', 'Ubah Data gagal');
        }
    }

    public function destroy($id) {
        $delete = Article::destroy($id);

        return redirect()->back();
    }
}
