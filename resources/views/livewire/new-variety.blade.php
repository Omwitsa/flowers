<div class="card">
    <div class="card-header">
        <h5>Variety</h5>
    </div>
    <div class="card-block">
        <form wire:submit="creatVariety" class="form-material" autocomplete="off">
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

            <!-- $table->boolean('Active')->default(true); -->
            <!-- $table->string('PicUrl'); -->

            </div>
            
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Color</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="Colour" name="Colour" type="color" class="form-control">
                    <x-input-error :messages="$errors->get('Colour')" class="mt-2" />
                </div>
            </div>
            
            <br><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
