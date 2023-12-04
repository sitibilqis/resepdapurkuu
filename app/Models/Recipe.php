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
        'est_time',
        'ingredients',
        'step',
        'link',
    ];
}
