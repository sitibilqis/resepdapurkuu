<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'rating' => '5',
                'comment' => 'saya sangat suka dengan resep ini',
                'created_at' => Carbon::now()
            ],
            [
                'rating' => '4',
                'comment' => 'saya suka resep ini, mudah untuk dibuat',
                'created_at' => Carbon::now()
                
            ],
            [
                'rating' => '4',
                'comment' => 'ada beberapa bahan yang perlu ditambahkan agar lebih pas rasa dari masakan ini',
                'created_at' => Carbon::now()
            ],
        ];
        Review::truncate();
        Review::insert($reviews);
    }
}
