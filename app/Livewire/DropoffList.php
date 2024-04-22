<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\dropoff;

class DropoffList extends Component
{
    public $dropoffs;
    public function mount()
    {
        $this->dropoffs = dropoff::all();
    }

    public function render()
    {
        return view('livewire.dropoff-list')->with([
            'dropoffs' => $this->dropoffs,
        ]);
    }
}
