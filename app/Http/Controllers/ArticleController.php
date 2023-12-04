<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $articles = Article::all();

        return view('article.index', [
            'articles' => $articles]);
    }

    public function detail($id) {
        /* menggunakan eloquent */
        $articles = Article::find($id)->first();
        return view('article.detail', ['articles' => $articles]);
    }

    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        return view('article.edit', ['articles' => $articles]);
    } 

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $articles = Article::findOrFail($id);

        $articles->update($request->all());

        if($articles) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect('/article'); 
    }

    public function new()
    {
        return view('article.new');
    }

    public function store(Request $request)
    {
        $articles = Article::create($request->all());
        if ($articles) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect('/article');
    }

    public function delete($id)
    {
        $articles = Article::findOrFail($id);
        return view('article.delete', ['articles' => $articles]);
    }

    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();

        if ($articles) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data kategori ' . $articles->name . ' berhasil');
        }
        return redirect('/article');
    }
}
