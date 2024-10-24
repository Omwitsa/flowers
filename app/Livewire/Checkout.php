<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public $orders;
    public function mount()
    {
        // $this->orders = OrderHeader::all();
        $this->orders = session('order_lines');
    }

    public function render()
    {
        return view('livewire.checkout')->with([
            'orders' => $this->orders,
        ]);
    }
}
