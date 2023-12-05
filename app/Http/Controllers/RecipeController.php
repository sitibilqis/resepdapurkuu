<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use Illuminate\Support\Facades\Session;

class RecipeController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $recipes = Recipe::all();

        return view('recipe.index', [
            'recipes' => $recipes]);
    }
    public function detail($id) {
        /* menggunakan eloquent */
        $recipes = Recipe::find($id)->first();
        return view('recipe.detail', ['recipes' => $recipes]);
    }
    public function edit($id) {
        /* menggunakan eloquent */
        $recipes = Recipe::find($id)->first();
        return view('recipe.edit', ['recipes' => $recipes]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $recipes = Recipe::findOrFail($id);

        $recipes->update($request->all());

        if($recipes) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect('/recipe'); 
    }
    public function new()
    {
        return view('recipe.new');
    }

    public function store(Request $request)
    {
        $recipes = Recipe::create($request->all());
        if ($recipes) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect('/recipe');
    }
    public function delete($id)
    {
        $recipes = Recipe::findOrFail($id);
        return view('recipe.delete', ['recipes' => $recipes]);
    }

    public function destroy($id)
    {
        $recipes = Recipe::findOrFail($id);
        $recipes->delete();

        if ($recipes) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data kategori ' . $recipes->name . ' berhasil');
        }
        return redirect('/recipe');
    }
}