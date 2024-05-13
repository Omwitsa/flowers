<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class NewCategory extends Component
{
    public string $name = '';
    public string $farm = '';

    public function creatCategory()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'farm' => ['required', 'string', 'max:255'],
        ]);

        Category::create($validated);
        $this->redirect('/categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-category');
    }
}
