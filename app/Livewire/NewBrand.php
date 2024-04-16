<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;


class NewBrand extends Component
{
    public string $name = '';
    public string $farm = '';

    public function creatBrand()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'farm' => ['required', 'string', 'max:255'],
        ]);

        Brand::create($validated);
        $this->redirect('/brands', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-brand');
    }
}
