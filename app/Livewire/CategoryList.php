<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{
    public $categories;
    public function mount()
    {
        $this->categories = Category::all();
    }

    public function edit($id){
        $this->redirectRoute(env('APP_ROOT').'edit-category', ['id' => $id]);
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        toastr()->success('Category deleted successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect(env('APP_ROOT').'categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.category-list')->with([
            'categories' => $this->categories,
        ]);
    }
}
