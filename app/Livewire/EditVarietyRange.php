<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;
use App\Models\varietyRange;

class EditVarietyRange extends Component
{
    public $range;
    public $brands;
    public string $Name = '';
    public string $HeadSize = '';
    public string $Brand = 'AAA ROSES';
    public $active;

    public function mount($id)
    {
        $this->brands = Brand::all();
        $this->range = varietyRange::find($id);
        $this->Name = $this->range->Name;
        $this->HeadSize = $this->range->HeadSize;
        $this->Brand = $this->range->Brand;
        $this->active = $this->range->active === 1;
    }

    public function updateRange()
    {
        $this->range->Name = $this->Name;
        $this->range->HeadSize = $this->HeadSize;
        $this->range->Brand = $this->Brand;
        $this->range->active = $this->active;
        $this->range->save();

        toastr()->success('Range updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/variety-range', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-variety-range');
    }
}
