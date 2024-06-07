<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;

class EditVariety extends Component
{
    use WithFileUploads;

    public $active;
    public $variety;
    public $subCategories;
    public $categories;
    public $MinimumOrder;
    public $ranges;
    public string $VarietyName = '';
    public string $VarietyCode = '';
    public string $FlowerType = '';
    public string $Colour = '';
    public string $category = 'AAA ROSES';
    public string $subCategory = '';
    #[Validate('image|max:1024')] // 1MB Max
    public $file;
    
    public function mount($id)
    {
        $this->categories = Category::all();
        $this->subCategories = DB::select('SELECT * FROM sub_categories WHERE Category = ?', [$this->category]);
        $this->variety = Variety::find($id);
        $this->VarietyName = $this->variety->VarietyName;
        $this->VarietyCode = $this->variety->VarietyCode;
        $this->FlowerType = $this->variety->FlowerType;
        $this->MinimumOrder = $this->variety->MinimumOrder;
        $this->Colour = $this->variety->Colour;
        $this->subCategory = $this->variety->SubCategory;
        $this->category = $this->variety->Category;
        $this->picUrl = $this->variety->picUrl;
        $this->active = $this->variety->Active === 1;
    } 

    public function UpdateVariety()
    {
        if($this->file){
            $name = time().'-'.$this->file->getClientOriginalName();
            $path = $this->file->storeAs('images', $name, 'public');
            $this->variety->picUrl = $path;
        }

        $this->variety->VarietyName = $this->VarietyName;
        $this->variety->VarietyCode = $this->VarietyCode;
        $this->variety->FlowerType = $this->FlowerType;
        $this->variety->MinimumOrder = $this->MinimumOrder;
        $this->variety->Colour = $this->Colour;
        $this->variety->Category = $this->category;
        $this->variety->SubCategory = $this->subCategory;
        $this->variety->Active = $this->active;
        $this->variety->save();

        toastr()->success('Variety updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect(env('APP_ROOT').'varieties');
    }

    public function render()
    {
        return view('livewire.edit-variety');
    }
}
