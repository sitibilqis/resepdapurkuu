<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $table = 'recipe';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'photo',
        'desc',
        'portion',
        'ingr_amount',
        'ingr_unit',
        'ingredients',
        'ingr_price',
        'step',
        'step_img',
        'est_time',
        'link',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'recipe_id');
    }
}
