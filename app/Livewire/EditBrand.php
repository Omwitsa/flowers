<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;

class EditBrand extends Component
{
    public string $name = '';
    public string $farm = '';
    public $active;
    public $brand;

    public function mount($id)
    {
        $this->brand = Brand::find($id);
        $this->name = $this->brand->name;
        $this->farm = $this->brand->farm;
        $this->active = $this->brand->active === 1;
    }

    public function UpdateBrand()
    {
        $this->brand->name = $this->name;
        $this->brand->farm = $this->farm;
        $this->brand->active = $this->active;
        $this->brand->save();

        toastr()->success('Brand updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/brands', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-brand');
    }
}
