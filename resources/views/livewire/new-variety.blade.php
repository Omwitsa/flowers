<div class="card">
    <div class="card-header">
        <h5>Variety</h5>
    </div>
    <div class="card-block">
        <form wire:submit="creatVariety" class="form-material">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="VarietyName" name="VarietyName" type="text" class="form-control" required>
                        <label class="float-label">Variety Name</label>
                        <x-input-error :messages="$errors->get('VarietyName')" class="mt-2" />
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="VarietyCode" name="VarietyCode" type="text" class="form-control" required>
                        <label class="float-label">Variety Code</label>
                        <x-input-error :messages="$errors->get('VarietyCode')" class="mt-2" />
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="FlowerType" name="FlowerType" type="text" class="form-control" required>
                        <label class="float-label">Flower Type</label>
                        <x-input-error :messages="$errors->get('FlowerType')" class="mt-2" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-default">
                        <input wire:model="Range" name="Range" type="text" class="form-control" required>
                        <label class="float-label">Range</label>
                        <x-input-error :messages="$errors->get('Range')" class="mt-2" />
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
