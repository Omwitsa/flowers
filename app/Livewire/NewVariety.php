<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Variety;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class NewVariety extends Component
{
    use WithFileUploads;

    public $categories;
    public $subCategories;
    public $MinimumOrder;
    public string $VarietyName = '';
    public string $VarietyCode = '';
    public string $FlowerType = '';
    public string $Colour = '';
    public string $Category = 'AAA ROSES';
    public string $SubCategory = '';
    public $file;

    public function mount()
    {
        $this->categories = Category::all();
        $this->subCategories = DB::select('SELECT * FROM sub_categories WHERE Category = ?', [$this->Category]);
    }

    public function creatVariety()
    {
        // Colour, Active, PicUrl
        $name = md5($this->file . microtime()).'.'.$this->file->extension();
        $this->file->storeAs('images', $name);

        $variety = new Variety;
        $variety->VarietyName = $this->VarietyName;
        $variety->VarietyCode = $this->VarietyCode;
        $variety->FlowerType = $this->FlowerType;
        $variety->MinimumOrder = $this->MinimumOrder;
        $variety->Colour = $this->Colour;
        $variety->Category = $this->Category;
        $variety->SubCategory = $this->SubCategory;
        $variety->picUrl = $name;
        $variety->save();

        $this->redirect('/varieties', navigate: true);
    }

    public function updatedCategory()
    {
        $this->subCategories = DB::select('SELECT * FROM sub_categories WHERE Category = ?', [$this->Category]);
    }

    public function render()
    {
        return view('livewire.new-variety');
    }
}
