<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{

    public $sortCategory = 'all', $search;
    public $allCategories;

    public function mount(){
        $this->allCategories = Category::all();
    }

    public function render()
    {

        $query = Category::orderBy('id', 'desc')->search($this->search);
        // $posts = Post::with('category')->get();

        if($this->sortCategory != 'all'){
            $query->where('category', $this->sortCategory);
        }

        $categories = $query->get();

        // $categories = Category::all();

        return view('livewire.category.category-component', ['categories' => $categories])->layout('livewire.layouts.base');
    }
}
