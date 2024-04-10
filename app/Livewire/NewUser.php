<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class NewUser extends Component
{
    // public $name;
    public string $name = '';
    public string $usercode = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public function render()
    {
        return view('livewire.new-user');
    }

    public function createUser()
    {
        // personnel, active, role
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'usercode' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        // Auth::login($user);

        $this->redirect('/users', navigate: true);
    }
}
