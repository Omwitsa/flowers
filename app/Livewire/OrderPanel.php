<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\PriceHeader;
use App\Models\PackRateHeader;
use App\Models\PriceLine;
use stdclass;
use Illuminate\Support\Facades\DB;

class OrderPanel extends Component
{
    public $brands = 'AAA ROSES';
    public $varietyRange = '';

    public $ranges;
    public $varieties;
    public $client;
    public $price;
    public $packRate;
    public $groupedVarieties = [];
    
    public function mount()
    {
        // $this->varieties= DB::select('SELECT * FROM variety WHERE brand = ? AND v_range = ?', [$this->brands, $this->range]);

        $this->client = Client::firstWhere('ClientCode', auth()->user()->usercode);
        $this->price = PriceHeader::firstWhere('Name', $this->client->Price);
        $this->packRate = PackRateHeader::firstWhere('Name', $this->client->PackRate);
        $this->ranges = DB::select('SELECT * FROM variety_ranges WHERE brand = ?', [$this->brands]);
        // $this->varieties= DB::select('SELECT * FROM variety WHERE brand = ?', [$this->brands]);

        $this->formatvariety();
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
        $this->ranges = DB::select('SELECT * FROM variety_ranges WHERE brand = ?', [$this->brands]);
        $this->varieties= DB::select('SELECT * FROM variety WHERE brand = ?', [$this->brands]);
        $this->formatvariety();
    }

    public function updatedVarietyRange()
    {
        $this->varieties= DB::select('SELECT * FROM variety WHERE brand = ? AND varietyRange = ?', [$this->brands, $this->varietyRange]);
    }

    private function formatvariety()
    {
        $this->groupedVarieties = [];
        foreach ($this->ranges as $range) {
            $formattedRange = new StdClass();
            $formattedRange->name = $range->Name;
            $this->varieties= DB::select('SELECT * FROM variety WHERE brand = ? AND varietyRange = ?', [$this->brands, $range->Name]);

            foreach ($this->varieties as $variety) {
                $variety->currency= $this->price->Currency;
                $priceLine = PriceLine::where('price_header_id', $this->price->id)->where('variety', $variety->VarietyName)->first();
                $variety->price= $priceLine->len60;
            }

            $formattedRange->varieties = $this->varieties;
            array_push($this->groupedVarieties, $formattedRange);
        }
    }

    // public function creatVariety()
    // {
    //     // $this->count--;
    // }
}
