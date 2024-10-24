<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use stdclass;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;

class SubCategoryComponent extends Component
{
    public $subCategories;
    public $length = 'len60';
    public $boxCapacity = 10;
    public $stemsPerBunch = 10;
    public $currency = 'Ksh:';
    public $amount = 500;
    public $currentBoxQuantity = 0;

    public function mount($category)
    {
        if(!session('currentBoxQuantity')){
            session(['currentBoxQuantity' => 0]);
        }
        $this->subCategories  = DB::select('SELECT * FROM sub_categories WHERE Category = ?', [$category]);
        foreach ($this->subCategories as $key => $value) {
            $subCategory = (object) $value;
            $varieties= DB::select('SELECT * FROM variety WHERE Category = ? AND SubCategory = ?', [$category, $subCategory->Name]);
            foreach ($varieties as $v_key => $v_value) {
                $variety = (object) $v_value;
                // $variety->quantity = $variety->MinimumOrder;
                $variety->quantity = 1;
                // $variety->remainingQnty = $variety->MinimumOrder;
            }
            $subCategory->varieties = $varieties;
        }
        // dd($this->subCategories);
    }

    public function render()
    {
        return view('livewire.sub-category-component');
    }

    public function increment($index, $v_index)
    {
        $variety = $this->subCategories[$index]->varieties[$v_index];
        $variety->quantity++;
    }

    public function decrement($index, $v_index)
    {
        $variety = $this->subCategories[$index]->varieties[$v_index];
        $variety->quantity--;
        $variety->quantity = $variety->quantity < 1 ? 1 : $variety->quantity;
    }

    public function add($index, $v_index)
    {
        $subCategory = $this->subCategories[$index];
        $variety = $subCategory->varieties[$v_index];
        $order_lines = session('order_lines');
        if($order_lines != null){
            $arr_bunches  = Arr::pluck($order_lines, 'bunches');
            $this->currentBoxQuantity = array_sum($arr_bunches) % $this->boxCapacity;
        }
        
        $currentBoxQuantity = $this->currentBoxQuantity;
        $this->currentBoxQuantity += $variety->quantity;
        if($this->currentBoxQuantity > $this->boxCapacity){
            $this->currentBoxQuantity = $currentBoxQuantity;
            return;
        }

        session(['currentBoxQuantity' => $this->currentBoxQuantity]);
        // if($this->currentBoxQuantity == $this->boxCapacity){
        //     $this->currentBoxQuantity = 0;
        //     return;
        // }

        $order_line = new StdClass();
        $order_line->BoxType = '';
        $order_line->BoxMarking = '';
        $order_line->VarietyCode = $variety->VarietyCode;
        $order_line->VarietyName = $variety->VarietyName;
        $order_line->subCategory = $subCategory->Name;
        $order_line->category = $subCategory->Category;
        $order_line->Length = $this->length;
        $order_line->bunches = $variety->quantity;
        $order_line->MinimumOrder = $variety->MinimumOrder;
        $order_line->PackRate = 0;
        $order_line->Boxes = $variety->MinimumOrder;
        $order_line->picUrl = $variety->picUrl;

        // $order_line->StemQty = $order_line->PackRate * $order_line->Boxes;
        
        if($order_lines == null){
            Session::push('order_lines', $order_line);
        }
        
        if($order_lines != null && !in_array($variety->VarietyName, array_column($order_lines, 'VarietyName'))){
            Session::push('order_lines', $order_line);
        }

        $order_lines = session('order_lines');
        $arr_bunches  = Arr::pluck($order_lines, 'bunches');
        session(['totalStems' => array_sum($arr_bunches)]);
        // dd($order_lines);
        return redirect(request()->header('Referer'));
    }
}
