<div class="card">
    <div class="card-header">
        <h5>Category</h5>
    </div>
    <div class="card-block">
        <form wire:submit="UpdateCategory" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">category</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="name" name="name" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Farm</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="farm" class="form-control" required>
                        <option disabled value=""></option>
                        <option value="Simba">Simba</option>
                        <option value="Chui">Chui</option>
                    </select>
                    <x-input-error :messages="$errors->get('farm')" class="mt-2" />
                </div>
            </div><br>

            <div class="form-group row">
                <div class="form-check form-check-inline">
                    <input wire:model="active" class="form-check-input" type="checkbox" id="active">
                    <label class="form-check-label" for="active">Active</label>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
