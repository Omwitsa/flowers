<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\varietyRange;
use Illuminate\Support\Facades\DB;

class OrderPanel extends Component
{
    public $brands = 'AAA ROSES';
    public $range = 'Bronze';

    public $varieties;
    public function mount()
    {
        // $this->varieties = varietyRange::all();
        $this->varieties= DB::select('SELECT * FROM variety_ranges WHERE brand = ? AND v_range = ?', [$this->brands, $this->range]);
    }

    public function render()
    {
        return view('livewire.order-panel')->with([
            'varieties' => $this->varieties,
        ]);
    }

    public function updatedBrands()
    {
        // dd($this->brands);
        if ($this->brands === 'AAA ROSES') {
            $this->range = 'Bronze';
            $this->varieties= DB::select('SELECT * FROM variety_ranges WHERE brand = ? AND v_range = ?', [$this->brands, $this->range]);
        }
        if ($this->brands === 'BELLISSIMA') {
            $this->range = 'Platinum';
            $this->varieties = DB::select('SELECT * FROM variety_ranges WHERE brand = ? AND v_range = ?', [$this->brands, $this->range]);
        }
    }

    public function updatedRange()
    {
        $this->varieties= DB::select('SELECT * FROM variety_ranges WHERE brand = ? AND v_range = ?', [$this->brands, $this->range]);
    }

    // public function creatVariety()
    // {
    //     // $this->count--;
    // }
}
