<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{

    public $category = 'all', $search;

    public function render()
    {
        $query = Post::orderBy('created_at', 'desc')->search($this->search);
        // $posts = Post::with('category')->get();

        if($this->category != 'all'){
            $query->where('category_id', $this->category);
        }

        $posts = $query->get();

        return view('livewire.crud.post-component', ['posts' => $posts])->layout('livewire.layouts.base');
        // return view('livewire.crud.post-component')->layout('livewire.layouts.base');
    }
}
