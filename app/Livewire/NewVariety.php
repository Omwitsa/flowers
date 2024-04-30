<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use Livewire\WithFileUploads;
use App\Models\Brand;
use App\Models\varietyRange;
use Illuminate\Support\Facades\DB;

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

        $selectedRange = varietyRange::firstWhere('Name', $this->varietyRange);
        // $this->picUrl->storeAs('public/uploads', 'sq.png');
        // $this->picUrl->store('public/photos');

        $variety = new Variety;
        $variety->VarietyName = $this->VarietyName;
        $variety->VarietyCode = $this->VarietyCode;
        $variety->FlowerType = $this->FlowerType;
        $variety->Colour = $this->Colour;
        $variety->brand = $this->brand;
        $variety->VarietyRangeId = $selectedRange->id;
        $variety->picUrl = $this->picUrl;
        $variety->save();

        $this->redirect('/varieties', navigate: true);
    }

    public function updatedBrand()
    {
        $this->ranges = DB::select('SELECT * FROM variety_ranges WHERE brand = ?', [$this->brand]);
    }

    public function render()
    {
        return view('livewire.new-variety');
    }
}
