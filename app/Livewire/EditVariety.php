<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use App\Models\Brand;
use App\Models\varietyRange;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class EditVariety extends Component
{
    use WithFileUploads;

    public $active;
    public $variety;
    public $brands;
    public $ranges;
    public string $VarietyName = '';
    public string $VarietyCode = '';
    public string $FlowerType = '';
    public string $Colour = '';
    public string $brand = 'AAA ROSES';
    public string $varietyRange = '';
    public string $picUrl = '';
    
    public function mount($id)
    {
        $this->brands = Brand::all();
        $this->ranges = DB::select('SELECT * FROM variety_ranges WHERE brand = ?', [$this->brand]);
        $this->variety = Variety::find($id);
        $selectedRange = varietyRange::firstWhere('id', $this->variety->VarietyRangeId);
        $this->VarietyName = $this->variety->VarietyName;
        $this->VarietyCode = $this->variety->VarietyCode;
        $this->FlowerType = $this->variety->FlowerType;
        $this->Colour = $this->variety->Colour;
        $this->brand = $this->variety->brand;
        $this->varietyRange = $selectedRange->Name;
        $this->picUrl = $this->variety->picUrl;
        $this->active = $this->variety->Active === 1;
    }

    public function UpdateVariety()
    {
        $this->variety->VarietyName = $this->VarietyName;
        $this->variety->VarietyCode = $this->VarietyCode;
        $this->variety->FlowerType = $this->FlowerType;
        $this->variety->Colour = $this->Colour;
        $this->variety->brand = $this->brand;
        $selectedRange = varietyRange::firstWhere('Name', $this->varietyRange);
        $this->variety->VarietyRangeId = $selectedRange->id;
        $this->variety->picUrl = $this->picUrl;
        $this->variety->Active = $this->active;
        $this->variety->save();

        toastr()->success('Variety updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/varieties', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-variety');
    }
}
