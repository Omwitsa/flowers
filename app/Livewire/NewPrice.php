<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PriceHeader;

class NewPrice extends Component
{
    public string $Name = '';
    public string $Currency = '';

    public function createPrice()
    {
        $validated = $this->validate([
            'Name' => ['required', 'string', 'max:100'],
            'Currency' => ['required', 'string', 'max:20'],
        ]);

        PriceHeader::create($validated);
        $this->redirect('/prices', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-price');
    }
}
