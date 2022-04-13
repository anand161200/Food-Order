<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDetail extends Model
{
    use HasFactory;
    protected $table = "food_detail";

    protected $fillable = [
        'food_name',
        'description',
        'category_id',
        'price',
        'images',
    ];

    public $timestamps = false;
}
