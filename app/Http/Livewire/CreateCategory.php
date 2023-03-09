<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{

    public $category, $remarks;

    public function render()
    {
        return view('livewire.category.create-category')->layout('livewire.layouts.base');
    }

    public function createCategory() {
        $this->validate([
            'category' => 'required',
            'remarks' => 'required'
        ]);


        $cat = new Category();

        $cat->category = $this->category;
        $cat->remarks = $this->remarks;

        $cat->save();

        $this->category = '';
        $this->remarks = '';

        return redirect('/categories')->with('message', 'Category has been created successfully.');
    }
}
