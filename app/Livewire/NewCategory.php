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
    public $file;

    public function creatCategory()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'farm' => ['required', 'string', 'max:255'],
            'file' => 'image|max:1024', // 1MB Max
        ]);

        // $name = $this->file->getClientOriginalName();
        // $validated['picUrl'] = $this->file->path();
        $name = md5($this->file . microtime()).'.'.$this->file->extension();
        $validated['picUrl'] = $name;

        $this->file->storeAs('images', $name);
        Category::create($validated);
        $this->redirect('/categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-category');
    }
}
