<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\dropoff;
use App\Models\ClientCategory;
use App\Models\Region;
use App\Models\PriceHeader;
use App\Models\PackRateHeader;

class NewClient extends Component
{
    public $dropoffs;
    public $categories;
    public $countries;
    public $prices;
    public $packrates;
    public string $ClientName = '';
    public string $ClientCode = '';
    public string $ClientType = '';
    public string $EmailRecepients = '';
    public string $DropOff = '';
    public string $Category = '';
    public string $Country = '';
    public string $ClientDivision = '';
    public string $Price = '';
    public string $PackRate = '';
    public string $Currency = '';

    public function mount()
    {
        $this->dropoffs = dropoff::all();
        $this->categories = ClientCategory::all();
        $this->countries = Region::all();
        $this->prices = PriceHeader::all();
        $this->packrates = PackRateHeader::all();
    }

    public function creatClient()
    {
        $validated = $this->validate([
            'ClientName' => ['required', 'string', 'max:255'],
            'ClientCode' => ['required', 'string', 'max:50'],
            'ClientType' => ['required', 'string', 'max:50'],
            'DropOff' => ['required', 'string', 'max:255'],
            'Category' => ['required', 'string', 'max:50'],
            'EmailRecepients' => ['string'],
            'Country' => ['required', 'string', 'max:50'],
            'ClientDivision' => ['required', 'string', 'max:100'],
            'Price' => ['string', 'max:100'],
            'PackRate' => ['string', 'max:100'],
            'Currency' => ['string', 'max:50'],
        ]);

        Client::create($validated);
        $this->redirect(env('APP_ROOT').'clients', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-client');
    }
}
