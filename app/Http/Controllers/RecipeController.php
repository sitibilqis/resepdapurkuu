<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        /* menggunakan eloquent */
        $recipes = Recipe::orderBy('title')->simplePaginate(8);
        return view('recipe.index', [
            'recipes' => $recipes
        ]);
    }

    public function create()
    {
        return view('recipe.new');
    }

    public function store(Request $request)
    {
        // dd(implode($request->get('ingr_amount')));
        // dd($request->all());
        $data = $request->all();
        $data['ingr_amount'] = implode('|', $request->ingr_amount);
        $data['ingr_unit'] = implode('|', $request->ingr_unit);
        $data['ingredients'] = implode('|', $request->ingredients);
        $data['ingr_price'] = implode('|', $request->ingr_price);
        $data['step'] = implode('|', $request->step);
        $data['photo'] = $request->file('photo')->store('resep', 'public');
        $data['step_img'] = $request->file('step_img')->store('step', 'public');
        $data['user_id'] = Auth::user()->id;

        $recipes = Recipe::create($data);
        // dd($recipes);
        if ($recipes) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
        }

        return redirect()->route('recipe.index');
    }

    public function show($id)
    {
        /* menggunakan eloquent */
        $recipe = Recipe::find($id);
        $reviews = $recipe->reviews;
        $review['user_id'] = Auth::user()->id;
        return view('recipe.detail', [
            'recipe' => $recipe,
            'reviews' => $reviews
        ]);
    }

    public function edit($id)
    {
        /* menggunakan eloquent */
        $recipe = Recipe::find($id);
        return view('recipe.edit', ['recipe' => $recipe]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $data['ingr_amount'] = implode('|', $request->ingr_amount);
        $data['ingr_unit'] = implode('|', $request->ingr_unit);
        $data['ingredients'] = implode('|', $request->ingredients);
        $data['ingr_price'] = implode('|', $request->ingr_price);
        $data['step'] = implode('|', $request->step);
        $data['user_id'] = Auth::user()->id;

        if (!empty($data['photo'])) {
            $data['photo'] = $request->file('photo')->store('resep', 'public');
        } else {
            unset($data['photo']);
        }

        if (!empty($data['step_img'])) {
            $data['step_img'] = $request->file('step_img')->store('step', 'public');
        } else {
            unset($data['step_img']);
        }

        $recipes = Recipe::findOrFail($id)->update($data);
        if ($recipes) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data berhasil');
        }

        return redirect()->route('recipe.index');
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
        return redirect()->back();
    }
}
