<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\WithFileUploads;

class NewSubCategory extends Component
{
    use WithFileUploads;
    public $categories;
    public string $Name = '';
    public string $HeadSize = '';
    public string $Category = 'AAA ROSES';
    public string $picUrl = '';

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
            'picUrl' => ['required'],
        ]);

        SubCategory::create($validated);
        $this->redirect('/sub-categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-sub-category');
    }
}
