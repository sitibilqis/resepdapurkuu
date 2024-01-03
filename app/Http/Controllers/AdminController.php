<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\Article;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        /* menggunakan eloquent */
        $recipes = Recipe::all();
        $articles = Article::all();

        return view('admin.index', [
            'recipes' => $recipes, 'articles' => $articles]);

    }

}
