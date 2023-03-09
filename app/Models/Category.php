<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'category',  
      'remarks',  
    ];

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }

    public function scopeSearch($query, $terms) {
      collect(explode(" ", $terms))
          ->filter()
          ->each(function ($term) use ($query) {
              $term = "%" . $term . "%";

              $query->where('category', 'like', $term);
          });
  }
}
