<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\dropoff;
use App\Models\Client;
use App\Models\PackRateHeader;
use App\Models\PackRateLine;

class OrderSummery extends Component
{
    public $dropOff;
    public $client;
    public $dropoffs;
    public $receivingDate;
    public $LpoNo = '116653';
    public $Status = 1;
    public $order_lines;
    public $boxTypes;
    public function mount()
    {
        $this->dropOff = dropoff::find(1)->name;
        $this->dropoffs = dropoff::all();
        $this->boxTypes = PackRateHeader::all();
        $this->client = Client::firstWhere('ClientCode', auth()->user()->usercode);
        $this->order_lines = session('order_lines');
    }

    public function render()
    {
        return view('livewire.order-summery');
    }

    public function onLengthChange($index, $value)
    {
        $order = $this->order_lines[$index];
        $this->modifyOrder($order);
    }

    public function onBoxTypeChange($index, $value)
    {
        $order = $this->order_lines[$index];
        $this->modifyOrder($order);
    }

    public function onEnterQuantity($index, $value)
    {
        $order = $this->order_lines[$index];
        $this->modifyOrder($order);
    }

    private function modifyOrder($order)
    {
        $order->BoxType = $order->BoxType == null ? '' : $order->BoxType;
        $length = $order->Length == null ? '' : $order->Length;
        $packRate = PackRateHeader::firstWhere('Name', $order->BoxType);
        if($packRate != null){
            $packrateLine = PackRateLine::where('pack_rate_header_id', $packRate->id)->where('variety', $order->VarietyName)->first();
            if($packrateLine != null){
                $order->PackRate = $packrateLine[$length];
                $order->StemQty = $packrateLine[$length] * $order->Boxes;
            }
        }
    }

    public function updatedLength()
    {
        $this->formatvariety();
    }

    public function order()
    {
        // dd($this->order_lines);
        // VarietyName, Length, BoxType, PackRate, quantity, StemQty

        
        // $selectedDropOff = dropoff::firstWhere('name', $this->dropOff);
        // $order = OrderHeader::create([
        //     'ClientId' => $this->client->id,
        //     'DateCreated' => date('Y-m-d', time()),
        //     'ReceivingDate' => $this->receivingDate,
        //     'LpoNo' => $this->LpoNo,
        //     'Status' => $this->Status,
        //     'Farm' => 'AAA ROSES',
        //     'Type' => '1',
        //     'IsSendEmail' => '1',
        //     'confirmUrl' => '',
        //     'DropOffId' => $selectedDropOff->id,
        //     'IsTransferred' => '1',
        // ]);

        // foreach ($this->order_lines as $item) {
        //     $item['order_header_id'] = $order->id;
        //     $order->orderLines()->create($item);
        // }

        // toastr()->success('Ordered successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        // Session::forget('order_lines');
        // $this->redirect('/', navigate: true);
    }
}
