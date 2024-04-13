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
}
