<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use App\Models\MixBox;
use App\Models\Brand;

class NewMixedBox extends Component
{
    public $varieties;
    public $brands;
    public string $name = '';
    public string $brand = '';
    public string $length = '';

    public $LineItems = [];

    public function mount()
    {
        $this->varieties = Variety::all();
        $this->brands = Brand::all();
    }

    public function addBox()
    {
        $this->LineItems[] = ['variety' => '', 'stems' => 0];
    }

    public function removeLineItems($index)
    {
        unset($this->LineItems[$index]);
    }

    public function createMixedBox()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:100'],
            'brand' => ['required', 'string', 'max:100'],
            'length' => ['required', 'string', 'max:20'],
        ]);

        $mixedBox = MixBox::create($validated);
        foreach ($this->LineItems as $item) {
            $mixedBox->mixBoxLines()->create($item);
        }

        $this->redirect(env('APP_ROOT').'list-mixed-box', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-mixed-box');
    }
}
