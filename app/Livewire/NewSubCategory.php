<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class NewSubCategory extends Component
{
    use WithFileUploads;
    public $categories;
    public string $Name = '';
    public string $HeadSize = '';
    public string $Category = 'AAA ROSES';
    #[Validate('image|max:1024')] // 1MB Max
    public $file;

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
            'file' => 'image|max:1024', // 1MB Max
        ]);

        $name = time().'-'.$this->file->getClientOriginalName();
        $path = $this->file->storeAs('images', $name, 'public');
        $validated['picUrl'] = $path;

        SubCategory::create($validated);
        $this->redirect(env('APP_ROOT').'sub-categories');
    }

    public function render()
    {
        return view('livewire.new-sub-category');
    }
}
