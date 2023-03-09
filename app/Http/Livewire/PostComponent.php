<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class PostComponent extends Component
{

    public $selectedCategory = "all", $search;
    public $categories;

    public function mount(){
        $this->categories = Category::all();

    }

    public function render()
    {
        $query = Post::orderBy('created_at', 'desc')->search($this->search);
        // $posts = Post::with('category')->get();

        if($this->selectedCategory != 'all'){
            $query->where('category_id', $this->selectedCategory);
        }

        $posts = $query->get();

        return view('livewire.crud.post-component', ['posts' => $posts])->layout('livewire.layouts.base');
        // return view('livewire.crud.post-component')->layout('livewire.layouts.base');
    }
}
