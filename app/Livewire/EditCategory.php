<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class EditCategory extends Component
{
    use WithFileUploads;
    public string $name = '';
    public string $farm = '';
    public $file;
    public $active;
    public $category;

    public function mount($id)
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->farm = $this->category->farm;
        $this->picUrl = $this->category->picUrl;
        $this->active = $this->category->active === 1;
    }

    public function UpdateCategory()
    {
        // $name = md5($this->file . microtime()).'.'.$this->file->extension();
        $name = time().'-'.$this->file->getClientOriginalName();
        $this->file->storeAs('images', $name);

        $this->category->name = $this->name;
        $this->category->farm = $this->farm;
        $this->category->active = $this->active;
        $this->category->picUrl = $name;
        $this->category->save();

        toastr()->success('Category updated successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect(env('APP_ROOT').'categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-category');
    }
}
