<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;

class EditSubCategory extends Component
{
    public $subCategory;
    public $categories;
    public string $Name = '';
    public string $HeadSize = '';
    public string $Category = 'AAA ROSES';
    public $active;

    public function mount($id)
    {
        $this->categories = Category::all();
        $this->subCategory = SubCategory::find($id);
        $this->Name = $this->subCategory->Name;
        $this->HeadSize = $this->subCategory->HeadSize;
        $this->Category = $this->subCategory->Category;
        $this->active = $this->subCategory->active === 1;
    }

    public function updateSubCategory()
    {
        $this->subCategory->Name = $this->Name;
        $this->subCategory->HeadSize = $this->HeadSize;
        $this->subCategory->Category = $this->Category;
        $this->subCategory->active = $this->active;
        $this->subCategory->save();

        toastr()->success('Sub-category updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/sub-categories', navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-sub-category');
    }
}
