<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

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
        $this->form->authenticate();
        Session::regenerate();
        toastr()->success('Logged in successfully', 'Congrats', ['positionClass' => 'toast-top-center']);
        $this->redirect('/dashboard', navigate: true);
    }
}; ?>


<div class="row">
    <div class="col-sm-12">
        <!-- Authentication card start -->
            <form wire:submit="login" class="md-float-material form-material" autocomplete="off">
                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center">Sign In</h3>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xs-12 col-sm-3 col-form-label">UserCode</label>
                            <div class="col-xs-12 col-sm-9">
                                <input wire:model="form.usercode" name="usercode" type="text" class="form-control" autocomplete="off" required>
                                <x-input-error :messages="$errors->get('usercode')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xs-12 col-sm-3 col-form-label">Password</label>
                            <div class="col-xs-12 col-sm-9">
                                <input wire:model="form.password" name="password" type="password" class="form-control" autocomplete="off" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row m-t-25 text-left">
                            <div class="col-12">
                                <!-- <div class="checkbox-fade fade-in-primary d-">
                                    <label for="remember">
                                        <input wire:model="form.remember" value="" id="remember" type="checkbox" id="remember">
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">Remember me</span>
                                    </label>
                                </div> -->
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <x-primary-button class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </div>
                        <hr/>
                    </div>
                </div>
            </form>
            <!-- end of form -->
    </div>
    <!-- end of col-sm-12 -->
</div>
