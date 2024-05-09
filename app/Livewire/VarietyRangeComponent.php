<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\varietyRange;

class VarietyRangeComponent extends Component
{
    public $varieties;
    public function mount()
    {
        $this->varieties = varietyRange::all();
    }

    public function edit($id){
        $this->redirectRoute('edit-variety-range', ['id' => $id]);
    }

    public function delete($id){
        $region = varietyRange::find($id);
        $region->delete();
        toastr()->success('Range deleted successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/variety-range', navigate: true);
    }

    public function render()
    {
        return view('livewire.variety-range-component')->with([
            'varieties' => $this->varieties,
        ]);
    }
}
