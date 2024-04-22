<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Region;

class RegionList extends Component
{
    public $regions;
    public function mount()
    {
        $this->regions = Region::all();
    }

    public function render()
    {
        return view('livewire.region-list')->with([
            'regions' => $this->regions,
        ]);
    }
}
