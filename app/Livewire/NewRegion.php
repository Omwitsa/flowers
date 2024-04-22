<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Region;

class NewRegion extends Component
{
    public string $name = '';

    public function createRegion()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:100'],
        ]);

        Region::create($validated);
        $this->redirect('/regions', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-region');
    }
}
