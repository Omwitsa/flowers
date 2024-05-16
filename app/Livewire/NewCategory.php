<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class NewCategory extends Component
{
    use WithFileUploads;
    public string $name = '';
    public string $farm = '';
    public string $picUrl = '';

    public function creatCategory()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'farm' => ['required', 'string', 'max:255'],
            'picUrl' => ['required'],
        ]);

        Category::create($validated);
        $this->redirect('/categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-category');
    }
}
