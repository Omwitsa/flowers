<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;

class VarietyComponent extends Component
{
    public $varieties;
    public function mount()
    {
        $this->varieties = Variety::all();
    }

    public function render()
    {
        return view('livewire.variety-component')->with([
            'varieties' => $this->varieties,
        ]);
    }
}
