<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\varietyRange;

class NewVarietyRange extends Component
{
    use WithFileUploads;

    public string $varietyName = '';
    public string $brand = 'AAA ROSES';
    public string $v_range = '';
    public $picUrl;

    public function creatVarietyRange()
    {
        $validated = $this->validate([
            'varietyName' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'v_range' => ['required', 'string', 'max:255'],
            'picUrl' => [''],
        ]);

        $this->picUrl->store('photos');
        varietyRange::create($validated);

        $this->redirect('/variety-range', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-variety-range');
    }
}
