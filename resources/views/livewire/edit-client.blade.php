<div class="card">
    <div class="card-header">
        <h5>Client</h5>
    </div>
    <div class="card-block">
        <form wire:submit="UpdateClient" class="form-material" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-xs-12 col-sm-2 col-form-label">Name</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="ClientName" name="ClientName" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('ClientName')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Code</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="ClientCode" name="ClientCode" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('ClientCode')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Type</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="ClientType" class="form-control" required>
                        <option disabled value=""></option>
                        <option value="Local">Local</option>
                        <option value="Foreign">Foreign</option>
                    </select>
                    <x-input-error :messages="$errors->get('ClientType')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Division</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="ClientDivision" name="ClientDivision" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('ClientDivision')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Drop Off</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="DropOff" class="form-control" required>
                        <option disabled value=""></option>
                        @foreach($dropoffs as $dropoff)
                            <option value="{{ $dropoff->name }}">{{ $dropoff->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('DropOff')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Category</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="Category" class="form-control" required>
                        <option disabled value=""></option>
                        @foreach($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('DropOff')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Country</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="Country" class="form-control">
                        <option disabled value=""></option>
                        @foreach($countries as $country)
                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('DropOff')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Price</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="Price" class="form-control">
                        <option disabled value=""></option>
                        @foreach($prices as $price)
                            <option value="{{ $price->Name }}">{{ $price->Name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('DropOff')" class="mt-2" />
                </div>


                <label class="col-xs-12 col-sm-2 col-form-label">Pack Rate</label>
                <div class="col-xs-12 col-sm-4">
                    <select wire:model="PackRate" class="form-control">
                        <option disabled value=""></option>
                        @foreach($packrates as $packrate)
                            <option value="{{ $packrate->Name }}">{{ $packrate->Name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('DropOff')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Currency</label>
                <div class="col-xs-12 col-sm-4">
                    <input wire:model="Currency" name="Currency" type="text" class="form-control" autocomplete="off" required>
                    <x-input-error :messages="$errors->get('Currency')" class="mt-2" />
                </div>

                <label class="col-xs-12 col-sm-2 col-form-label">Email Recepients</label>
                <div class="col-xs-12 col-sm-4">
                    <textarea wire:model="EmailRecepients" name="EmailRecepients" rows="3" class="form-control"></textarea>
                    <x-input-error :messages="$errors->get('EmailRecepients')" class="mt-2" />
                </div>
            </div>
            
            <br><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
