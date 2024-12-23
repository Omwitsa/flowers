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
    public $selectedVariety;
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
        $this->subCategories  = DB::select('SELECT * FROM sub_categories WHERE Category = ? AND Active = true', [$category]);
        $this->populateQuantity();
    }

    public function populateQuantity()
    {
        $box = session('box');
        foreach ($this->subCategories as $key => $value) {
            $subCategory = (object) $value;
            $varieties= DB::select('SELECT * FROM variety WHERE Category = ? AND SubCategory = ? AND Active = true', [$subCategory->Category, $subCategory->Name]);
            foreach ($varieties as $v_key => $v_value) {
                $variety = (object) $v_value;
                $variety->quantity = $variety->MinimumOrder;
                if($box){
                     // $filtered = array_filter($orderedItems, function ($order_line) use ($variety)  {
                    //     return ($order_line->VarietyName == $variety->VarietyName);
                    // });
                    $orderedItem = Arr::first($box->bunches, function ($bunch) use ($variety) {
                        return ($bunch->VarietyName == $variety->VarietyName);
                    });

                    if($orderedItem){
                        $variety->quantity = $orderedItem->quantity;
                    }
                }
            }
            $subCategory->varieties = $varieties;
        }
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
        
        $this->handleCurrentBox($variety);
        return redirect(request()->header('Referer'));
    }

    public function handleCurrentBox($variety){
        $box = session('box'); 
        if(!isset($box)){
            $box = new StdClass();
            $box->bunches = [];
        }

        $box->BoxType = '';
        $box->BoxMarking = '';
        $box->Length = $this->length;
        $box->category = $variety->Category;
        $box->PackRate = 0;
        $box->capacity = $this->boxCapacity;
        $box->currentQuantity = isset($box->currentQuantity) ? $box->currentQuantity : 0;
        $variety->cost = $variety->quantity * $this->amount;
        $currentQuantity = $box->currentQuantity + $variety->quantity;
        if($currentQuantity > $box->capacity){
            toastr()->error('Maximum box capacity is '.$box->capacity.' bunches', 'Sorry', ['positionClass' => 'toast-top-center']);
            return;
        }
       
        if(in_array($variety->VarietyName, array_column($box->bunches, 'VarietyName'))){
            toastr()->error('The box already has the variety', 'Sorry', ['positionClass' => 'toast-top-center']);
            return redirect(request()->header('Referer'));
        }
        
        $box->currentQuantity += $variety->quantity;
        array_push($box->bunches, $variety);
        session(['box' => $box]);
        if($box->currentQuantity == $box->capacity){
            Session::push('boxes', $box);
            $this->subCategories  = SubCategory::all();
            Session::forget('box');
            $box->currentQuantity = 0;
        }

        session(['currentBoxQuantity' => $box->currentQuantity]);
    }

    public function loadAlternatives($index, $v_index)
    {
        $subCategory = $this->subCategories[$index];
        $this->selectedVariety = $subCategory->varieties[$v_index];
        
        if(!$this->selectedVariety->AltVarieties){
            $this->selectedVariety->AltVarieties = '';
        }

        $AltVarieties = explode(',',  $this->selectedVariety->AltVarieties);
        $alternatives = DB::table('variety')
            ->where('Active', '=', true)
            ->where('InStock', '=', true)
            ->whereIn('id', $AltVarieties)
            ->get();

        foreach ($alternatives as $v_key => $value){
            $value->quantity = $value->MinimumOrder;
        }   

        $this->selectedVariety->alternatives = $alternatives;
    }

    public function addAlternative($index)
    {
        $alternative = $this->selectedVariety->alternatives[$index];
        $this->handleCurrentBox($alternative);
        return redirect(request()->header('Referer'));
    }
}
