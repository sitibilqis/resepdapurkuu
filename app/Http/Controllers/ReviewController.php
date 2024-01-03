<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $reviews = Review::all();

        return view('review.index', [
            'reviews' => $reviews]);
    }
    public function detail($id) {
        /* menggunakan eloquent */
        $reviews = Review::find($id)->first();
        return view('review.detail', ['reviews' => $reviews]);
    }
    public function edit($id) {
        /* menggunakan eloquent */
        $reviews = Review::find($id)->first();
        return view('review.edit', ['reviews' => $reviews]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $reviews = Review::findOrFail($id);

        $reviews->update($request->all());

        if($reviews) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect('/review'); 
    }
    public function new($recipeId)
    {
        $reviews = Review::all();
        return view('review.new', [
            'recipe_id' => $recipeId,
            'reviews' => $reviews
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $recipeId = $request->input('recipe_id');

        $reviews = Review::create(array_merge(
            $request->all(),
            ['user_id' => Auth::id()]
        ));
        if ($reviews) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect()->route('recipe.show', $recipeId);
    }
    public function delete($id)
    {
        $reviews = Review::findOrFail($id);
        return view('review.delete', ['reviews' => $reviews]);
    }

    public function destroy($id)
    {
        $reviews = Review::findOrFail($id);
        $reviews->delete();

        if ($reviews) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data kategori ' . $reviews->name . ' berhasil');
        }
        return redirect('/review');
    }
}