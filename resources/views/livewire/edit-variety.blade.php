<div class="card">
    <div class="card-header">
        <h5>Variety</h5>
    </div>
    <div class="card-block">
        <form wire:submit="UpdateVariety" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Variety Name</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="VarietyName" name="VarietyName" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('VarietyName')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Variety Code</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="VarietyCode" name="VarietyCode" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('VarietyCode')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Flower Type</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="FlowerType" class="form-control" required>
                        <option disabled value=""></option>
                        <option value="Spray">Spray</option>
                        <option value="Standard">Standard</option>
                    </select>
                    <x-input-error :messages="$errors->get('FlowerType')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Category</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model.live="Category" class="form-control" required>
                        <option disabled value=""></option>
                        @foreach($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('Category')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Sub-Category</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="subCategory" class="form-control" required>
                        <option disabled value=""></option>
                        @foreach($subCategories as $subCategory)
                            <option value="{{ $subCategory->Name }}">{{ $subCategory->Name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('subCategory')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Minimum Order</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="MinimumOrder" name="MinimumOrder" type="number" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('MinimumOrder')" class="mt-2" />
                </div>

            <!-- $table->string('PicUrl'); -->

            </div>

            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Upload Picture</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="picUrl" id="picUrl" name="picUrl" type="file" class="form-control">
                    <x-input-error :messages="$errors->get('picUrl')" class="mt-2" />
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Color</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="Colour" name="Colour" type="color" class="form-control">
                    <x-input-error :messages="$errors->get('Colour')" class="mt-2" />
                </div>
            </div>

            <div class="form-group row">
                <div class="form-check form-check-inline">
                    <input wire:model="active" class="form-check-input" type="checkbox" id="active">
                    <label class="form-check-label" for="active">Active</label>
                </div>
            </div><br>
            
            <br><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>