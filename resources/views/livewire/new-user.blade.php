<div class="card">
    <div class="card-header">
        <h5>User</h5>
    </div>
    <div class="card-block">
        <form wire:submit="createUser" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Name</label>
                <div class="col-xs-12 col-sm-4">
                    <input  wire:model="name" name="name" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Usercode</label>
                <div class="col-xs-12 col-sm-4">
                    <input  wire:model="usercode" name="usercode" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('usercode')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Password</label>
                <div class="col-xs-12 col-sm-4">
                    <input  wire:model="password" name="password" type="password" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Email</label>
                <div class="col-xs-12 col-sm-4">
                    <input  wire:model="email" name="email" type="email" class="form-control">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
