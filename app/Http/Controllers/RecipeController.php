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
}