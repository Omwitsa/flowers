<div class="card">
    <div class="card-header">
        <h5>Client Category</h5>
    </div>
    <div class="card-block">
        <form wire:submit="creatCategory" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Category</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="name" name="name" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
