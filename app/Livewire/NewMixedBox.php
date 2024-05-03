<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use App\Models\MixBox;

class NewMixedBox extends Component
{
    public $varieties;
    public string $Name = '';

    public $LineItems = [];

    public function mount()
    {
        $this->varieties = Variety::all();
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
            'Name' => ['required', 'string', 'max:100'],
        ]);

        $packRate = MixBox::create($validated);
        foreach ($this->packrateLines as $item) {
            $packRate->packRateLines()->create($item);
        }

        $this->redirect('/packrates', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-mixed-box');
    }
}
