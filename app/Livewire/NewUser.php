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
    
    public string $password_confirmation = '';
    public function render()
    {
        return view('livewire.new-user');
    }

    // public $varieties;
    public function mount()
    {
        // $this->varieties = Variety::all();
        // users = DB::table('users')
        //         ->whereIn('id', [1, 2, 3])
        //         ->get();

        // $query->where('price', '>=', $min)
        //           ->where('price', '<=', $max);

        // // OR WHERE
        // Model::query()->where([])->orWhere([])->get();

        // // AND WHERE
        // Model::query()->where([['column1' , '!=' , 'value1'] , ['column2' , '=' , 'value2'] , ['column3' , '<' , 'value3']])->get();
    }

    public function createUser()
    {
        // personnel, active
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'usercode' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        event(new Registered($user = User::create($validated)));
        $this->redirect('/users', navigate: true);
    }
}
