<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\varietyRange; 
use App\Models\Brand;

class NewVarietyRange extends Component
{
    use WithFileUploads;

    public $brands;
    public string $Name = '';
    public string $HeadSize = 'AAA ROSES';
    public string $Brand = '';

    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function creatVarietyRange()
    {
        $validated = $this->validate([
            'Name' => ['required', 'string', 'max:100'],
            'HeadSize' => ['required', 'string', 'max:100'],
            'Brand' => ['required', 'string', 'max:100'],
        ]);

        varietyRange::create($validated);
        $this->redirect('/variety-range', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-variety-range');
    }
}
