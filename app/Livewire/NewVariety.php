<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use Livewire\WithFileUploads;

class NewVariety extends Component
{
    use WithFileUploads;

    public string $VarietyName = '';
    public string $VarietyCode = '';
    public string $FlowerType = '';
    public string $Colour = '';

    public function creatVariety()
    {
        // Colour, Active, PicUrl

        $validated = $this->validate([
            'VarietyName' => ['required', 'string', 'max:255'],
            'VarietyCode' => ['required', 'string', 'max:255'],
            'FlowerType' => ['required', 'string', 'max:255'],
            'Colour' => ['string', 'max:255'],
        ]);

        Variety::create($validated);

        $this->redirect('/varieties', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-variety');
    }
}
