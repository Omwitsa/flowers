<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserComponent extends Component
{
    public $users;
    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user')->with([
            'users' => $this->users,
        ]);
    }
}
