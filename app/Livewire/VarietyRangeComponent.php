<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\varietyRange;

class VarietyRangeComponent extends Component
{
    public $varieties;
    public function mount()
    {
        $this->varieties = varietyRange::all();
    }

    public function render()
    {
        return view('livewire.variety-range-component')->with([
            'varieties' => $this->varieties,
        ]);
    }
}
