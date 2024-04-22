<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use Livewire\WithFileUploads;
use App\Models\Brand;
use App\Models\varietyRange;

class NewVariety extends Component
{
    use WithFileUploads;

    public $brands;
    public $ranges;
    public string $VarietyName = '';
    public string $VarietyCode = '';
    public string $FlowerType = '';
    public string $Colour = '';
    public string $brand = '';
    public string $varietyRange = '';
    public string $picUrl = '';

    public function mount()
    {
        $this->brands = Brand::all();
        $this->ranges = varietyRange::all();
    }

    public function creatVariety()
    {
        // Colour, Active, PicUrl

        $validated = $this->validate([
            'VarietyName' => ['required', 'string', 'max:100'],
            'VarietyCode' => ['required', 'string', 'max:50'],
            'FlowerType' => ['required', 'string', 'max:50'],
            'Colour' => ['string', 'max:50'],
            'brand' => ['required', 'string', 'max:100'],
            'varietyRange' => ['required', 'string', 'max:50'],
            'picUrl' => [''],
        ]);

        // $this->picUrl->storeAs('public/uploads', 'sq.png');
        // $this->picUrl->store('public/photos');

        Variety::create($validated);

        $this->redirect('/varieties', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-variety');
    }
}
