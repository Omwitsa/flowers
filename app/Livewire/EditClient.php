<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\dropoff;
use App\Models\ClientCategory;
use App\Models\Region;
use App\Models\PriceHeader;
use App\Models\PackRateHeader;

class EditClient extends Component
{
    public $client;
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

    public function mount($id)
    {
        $this->dropoffs = dropoff::all();
        $this->categories = ClientCategory::all();
        $this->countries = Region::all();
        $this->prices = PriceHeader::all();
        $this->packrates = PackRateHeader::all();
        $this->client = Client::find($id);
        $this->ClientName = $this->client->ClientName;
        $this->ClientCode = $this->client->ClientCode;
        $this->ClientType = $this->client->ClientType;
        $this->EmailRecepients = $this->client->EmailRecepients;
        $this->DropOff = $this->client->DropOff;
        $this->Category = $this->client->Category;
        $this->Country = $this->client->Country;
        $this->ClientDivision = $this->client->ClientDivision;
        $this->Price = $this->client->Price;
        $this->PackRate = $this->client->PackRate;
        $this->Currency = $this->client->Currency;
    }

    public function UpdateClient()
    {
        $this->client->ClientName = $this->ClientName;
        $this->client->ClientCode = $this->ClientCode;
        $this->client->ClientType = $this->ClientType;
        $this->client->EmailRecepients = $this->EmailRecepients;
        $this->client->DropOff = $this->DropOff;
        $this->client->Category = $this->Category;
        $this->client->Country = $this->Country;
        $this->client->ClientDivision = $this->ClientDivision;
        $this->client->Price = $this->Price;
        $this->client->PackRate = $this->PackRate;
        $this->client->Currency = $this->Currency;
        
        $this->client->save();
        toastr()->success('Client updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect(env('APP_ROOT').'clients');
    }

    public function render()
    {
        return view('livewire.edit-client');
    }
}
