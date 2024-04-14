<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;

class OrderPanel extends Component
{
    public $brands = 'AAA ROSES';
    public $range = 'Bronze';

    public $varieties;
    public function mount()
    {
        $this->varieties = Variety::all();
    }

    public function render()
    {
        return view('livewire.order-panel')->with([
            'varieties' => $this->varieties,
        ]);
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
