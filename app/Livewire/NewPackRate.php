<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PackRateHeader;

class NewPackRate extends Component
{
    public string $Name = '';

    public function createPackRate()
    {
        $validated = $this->validate([
            'Name' => ['required', 'string', 'max:100'],
        ]);

        PackRateHeader::create($validated);
        $this->redirect('/packrates', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-pack-rate');
    }
}
