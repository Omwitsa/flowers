<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientComponent extends Component
{
    public $clients;
    public function mount()
    {
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.client')->with([
            'clients' => $this->clients,
        ]);
    }
}
