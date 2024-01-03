<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipe', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->enum('category', ['Indonesia', 'Jepang', 'China', 'Korea', 'Thailand', 'India', 'Vietnam', 'Itali', 'Malaysia', 'Filipina']);
            $table->binary('photo');
            $table->text('desc');
            $table->integer('portion');
            $table->integer('est_time');
            $table->mediumText('ingr_amount');
            $table->mediumText('ingr_unit');
            $table->mediumText('ingredients');
            $table->mediumText('ingr_price');
            $table->mediumText('step');
            $table->binary('step_img');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe');
    }
};
