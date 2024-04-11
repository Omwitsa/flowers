<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;

class BrandComponent extends Component
{
    public $brands;
    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function render()
    {
        return view('livewire.brand')->with([
            'brands' => $this->brands,
        ]);
    }
}
