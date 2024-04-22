<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ClientCategory;

class ClientCategoryList extends Component
{
    public $categories;
    public function mount()
    {
        $this->categories = ClientCategory::all();
    }

    public function render()
    {
        return view('livewire.client-category-list')->with([
            'categories' => $this->categories,
        ]);
    }
}
