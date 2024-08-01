<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class SubCategoryComponent extends Component
{
    public $subCategories;

    public function mount($category)
    {
        $this->subCategories  = DB::select('SELECT * FROM sub_categories WHERE Category = ?', [$category]);
        foreach ($this->subCategories as $key => $value) {
            $subCategory = (object) $value;
            $varieties= DB::select('SELECT * FROM variety WHERE Category = ? AND SubCategory = ?', [$category, $subCategory->Name]);
            foreach ($varieties as $v_key => $v_value) {
                $variety = (object) $v_value;
                $variety->quantity = 1;
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
        $variety = $this->subCategories[$index]->varieties[$v_index];
        // dd($variety);
    }
}
