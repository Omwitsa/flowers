<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;

class BrandComponent extends Component
{
    public $brands;
    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function edit($id){
        $this->redirectRoute('edit-brand', ['id' => $id]);
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        toastr()->success('Brand deleted successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/brands', navigate: true);
    }

    public function render()
    {
        return view('livewire.brand')->with([
            'brands' => $this->brands,
        ]);
    }
}
