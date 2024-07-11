<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\DB;

use App\Constants\Roles;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();
        // $isInactive = DB::table('client')
        //     ->where('ClientCode', $this->form->usercode)
        //     ->where('Category', 'Inactive')
        //     ->exists();

        // if($isInactive){
        //     toastr()->error('Your account is inactive, Kindly contact admin', 'Sorry', ['positionClass' => 'toast-top-center']);
        //     $this->redirect('/login', navigate: true);
        // }
        
        $this->form->authenticate();
        Session::regenerate();
        toastr()->success('Logged in successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        // $this->redirect(env('APP_ROOT').'dashboard');
        $this->redirect(env('APP_ROOT').'client-home');
    }
}; ?>


<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5 login-section">
        <img src="{{env('APP_ROOT')}}assets/images/AAARoses.png" alt="roses" style="width:15%;"><br><br><br>

        <span>Welcome to...</span>
        <H1>THE WORLD OF <br> ROSES</H1><br><br>

        <div class="row">
            <div class="col-md-8">
                <form wire:submit="login" autocomplete="off">
                    <div class="user-credential active">
                        <label class="form-control-label">UserName</label>
                        <input  wire:model="form.usercode" name="usercode" type="text" placeholder="AAA" class="form-control" aria-describedby="emailHelp" autocomplete="off" required>
                        <x-input-error :messages="$errors->get('usercode')" class="mt-2" />
                    </div>
                    <div class="user-credential">
                        <label for="exampleInputPassword1" class="form-control-label">Password</label>
                        <input wire:model="form.password" name="password" type="password" placeholder="**********" class="form-control" autocomplete="off" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <x-primary-button class="btn btn-primary">
                                {{ __('Login') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <img class="login-img" src="{{env('APP_ROOT')}}assets/images/login-img.png" alt="roses">
    </div>
</div>