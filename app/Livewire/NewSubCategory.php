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

        // $name = md5($this->file . microtime()).'.'.$this->file->extension();
        $name = time().'-'.$this->file->getClientOriginalName();
        $validated['picUrl'] = $name;

        $this->file->storeAs('images', $name);
        SubCategory::create($validated);
        $this->redirect(env('APP_ROOT').'sub-categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-sub-category');
    }
}
