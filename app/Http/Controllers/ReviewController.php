<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $reviews = Review::all();

        return view('review.index', [
            'reviews' => $reviews]);
    }
}