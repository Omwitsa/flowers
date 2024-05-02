<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\dropoff;
use App\Models\Client;
use stdclass;
use App\Models\OrderHeader;

class OrderSummery extends Component
{
    public $dropOff;
    public $client;
    public $dropoffs;
    public $receivingDate;
    public $LpoNo = '116653';
    public $Status = 1;
    public function mount()
    {
        $this->dropOff = dropoff::find(1)->name;
        $this->dropoffs = dropoff::all();
        $this->client = Client::firstWhere('ClientCode', auth()->user()->usercode);
        // $this->client = Brand::firstWhere('name', auth()->user()->usercode);
    }

    public function render()
    {
        $order_lines = session('order_lines');
        return view('livewire.order-summery')->with([
            'order_lines' => $order_lines,
        ]);
    }

    public function order()
    {
        $selectedDropOff = dropoff::firstWhere('name', $this->dropOff);
        $order = OrderHeader::create([
            'ClientId' => $this->client->id,
            'DateCreated' => date('Y-m-d', time()),
            'ReceivingDate' => $this->receivingDate,
            'LpoNo' => $this->LpoNo,
            'Status' => $this->Status,
            'Farm' => 'AAA ROSES',
            'Type' => '1',
            'IsSendEmail' => '1',
            'confirmUrl' => '',
            'DropOffId' => $selectedDropOff->id,
            'IsTransferred' => '1',
        ]);

        $orderlines = session('order_lines');
        foreach ($orderlines as $item) {
            $item['order_header_id'] = $order->id;
            // $ordered = (object) $item;
            $order->orderLines()->create($item);
        }

        session('order_lines');
        // dd($ordered);
        $this->redirect('/', navigate: true);
    }
}
