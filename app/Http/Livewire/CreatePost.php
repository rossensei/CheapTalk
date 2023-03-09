<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $category_id, $author, $title, $content;
    public function render()
    {

        return view('livewire.crud.create-post')->layout('livewire.layouts.base');
    }

    public function create() {
        $this->validate([
            'category_id' => 'required',
            'author' => 'required',
            'title' => 'required',
            'content' => 'required|string:10'
        ]);


        $post = new Post();

        $post->category_id = $this->category_id;
        $post->author = $this->author;
        $post->title = $this->title;
        $post->content = $this->content;

        $post->save();

        $this->category_id = '';
        $this->author = '';
        $this->title = '';
        $this->content = '';

        return redirect('/')->with('message', 'Post has been created successfully.');
    }
}
