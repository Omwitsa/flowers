<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;

class NewSubCategory extends Component
{
    public $categories;
    public string $Name = '';
    public string $HeadSize = '';
    public string $Category = 'AAA ROSES';

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function createSubCategory()
    {
        $validated = $this->validate([
            'Name' => ['required', 'string', 'max:100'],
            'HeadSize' => ['required', 'string', 'max:100'],
            'Category' => ['required', 'string', 'max:100'],
        ]);

        SubCategory::create($validated);
        $this->redirect('/sub-categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-sub-category');
    }
}
