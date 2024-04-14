<?php

namespace App\Livewire;

use Livewire\Component;

class OrderPanel extends Component
{
    public $brands = 'Roses';

    public function render()
    {
        return view('livewire.order-panel');
    }

    // public function updatedBrands($value)
    // {
    //     // dd($this->selectedValue);
    //     // Do something when the selected value changes
    // }

    // public function creatVariety()
    // {
    //     // $this->count--;
    // }
}
