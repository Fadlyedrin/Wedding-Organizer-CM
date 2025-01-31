<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'price', 'image', 'description'];

    //relasi ke category

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
