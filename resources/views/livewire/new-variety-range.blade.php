<div class="card">
    <div class="card-header">
        <h5>Variety Range</h5>
    </div>
    <div class="card-block">
        <form wire:submit="creatVarietyRange" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Variety Name</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="varietyName" name="varietyName" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('varietyName')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Brand</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model.live="brand" class="form-control" required>
                        <option disabled value=""></option>
                        <option value="AAA ROSES">AAA ROSES</option>
                        <option value="BELLISSIMA">BELLISSIMA</option>
                    </select>
                    <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Range</label>
                <div class="col-xs-12 col-sm-4">
                    @if($brand === 'AAA ROSES')
                        <select wire:model="v_range" class="form-control">
                            <option disabled value=""></option>
                            <option value="Bronze">Bronze</option>
                            <option value="Silver">Silver</option>
                            <option value="Spray Deluxe">Spray Deluxe</option>
                            <option value="Spray Premium">Spray Premium</option>
                        </select>
                    @elseif($brand === 'BELLISSIMA')
                        <select wire:model="v_range" class="form-control">
                            <option disabled value=""></option>
                            <option value="Platinum">Platinum</option>
                            <option value="Gold">Gold</option>
                            <option value="Gold + Premium">Gold + Premium</option>
                            <option value="Gold + Deluxe">Gold + Deluxe</option>
                        </select>
                    @endif
                    <x-input-error :messages="$errors->get('v_range')" class="mt-2" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Upload Picture</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="picUrl" name="picUrl" type="file" class="form-control">
                    <x-input-error :messages="$errors->get('picUrl')" class="mt-2" />
                </div>
            </div>

            <br><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
