<div class="card">
    <div class="card-header">
        <h5>User</h5>
    </div>
    <div class="card-block">
        <form wire:submit="createUser" class="form-material">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="name" name="name" type="text" class="form-control" required>
                        <label class="float-label">Name</label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="usercode" name="usercode" type="text" class="form-control" required>
                        <label class="float-label">Usercode</label>
                        <x-input-error :messages="$errors->get('usercode')" class="mt-2" />
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="email" name="email" type="email" class="form-control">
                        <label class="float-label">Email</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="password" name="password" type="password" class="form-control" required>
                        <label class="float-label">Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
                        <label class="float-label">Confirm Password</label>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
