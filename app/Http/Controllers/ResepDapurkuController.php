<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class ResepDapurkuController extends Controller
{
    public function index()
    {
        if (Auth::user() && Auth::user()->role == 'admin') {
            return redirect()->route('homepageadm');
        }

        $recipes = Recipe::paginate(3);
        return view('resepdapurku', [
            'recipes' => $recipes
        ]);
    }
}
