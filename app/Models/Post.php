<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'author',
        'title',
        'content',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeSearch($query, $terms) {
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term) use ($query) {
                $term = "%" . $term . "%";

                $query->where('title', 'like', $term);
            });
    }
}