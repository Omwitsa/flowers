<div class="card">
    <div class="card-header">
        <h5>Packrate</h5>
    </div>
    <div class="card-block">
        <form wire:submit="createPackRate" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Pack Rate</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="Name" name="Name" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('Name')" class="mt-2" />
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
