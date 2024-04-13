<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;

class NewVariety extends Component
{
    public string $VarietyName = '';
    public string $VarietyCode = '';
    public string $FlowerType = '';
    public string $Range = '';
    public string $Colour = '';
    public string $PicUrl = '';

    public function creatVariety()
    {
        // Colour, Active, PicUrl

        $validated = $this->validate([
            'VarietyName' => ['required', 'string', 'max:255'],
            'VarietyCode' => ['required', 'string', 'max:255'],
            'FlowerType' => ['required', 'string', 'max:255'],
            'Range' => ['required', 'string', 'max:255'],
            'Colour' => ['string', 'max:255'],
            'PicUrl' => ['string', 'max:255'],
        ]);

        // Variety::create([
        //     'VarietyName' => $this->VarietyName,
        //     'VarietyCode' => $this->VarietyCode,
        //     'FlowerType' => $this->FlowerType,
        //     'Range' => $this->Range,
        // ]);

        Variety::create($validated);

        $this->redirect('/varieties', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-variety');
    }
}
