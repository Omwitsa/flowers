<div class="card">
    <div class="card-header">
        <h5>Mixed Box</h5>
    </div>
    <div class="card-block">
        <form wire:submit="createMixedBox" class="form-material" autocomplete="off">
            @csrf
            <!-- Row start -->
            <div class="row m-b-30">
                <div class="col-xs-12 col-sm-12">
                    <ul class="nav nav-tabs md-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#header" role="tab">Header</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#lineItem" role="tab">Line</a>
                            <div class="slide"></div>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content card-block">
                        <div class="tab-pane active" id="header" role="tabpanel">
                            <div class="form-group row">
                                <label class="col-xs-12 col-sm-2 col-form-label">Mixed Box</label>
                                <div class="col-xs-12 col-sm-4">
                                    <input wire:model="name" name="name" type="text" class="form-control" autocomplete="off" required>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <label class="col-xs-12 col-sm-2 col-form-label"></label>
                                <div class="col-xs-12 col-sm-4">
                                    <select wire:model="brand" class="form-control" required>
                                        <option disabled value=""></option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                                </div>

                                <label class="col-xs-12 col-sm-2 col-form-label">Length</label>
                                <div class="col-xs-12 col-sm-4">
                                    <select wire:model="length" class="form-control" required>
                                        <option disabled value=""></option>
                                        <option value="40">40 cm</option>
                                        <option value="50">50 cm</option>
                                        <option value="60">60 cm</option>
                                        <option value="70">70 cm</option>
                                        <option value="80">80 cm</option>
                                        <option value="90">90 cm</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="lineItem" role="tabpanel">
                            <div>
                                @foreach($LineItems as $index => $item)
                                    <div>
                                        <select wire:model="LineItems.{{ $index }}.variety" required>
                                            <option disabled value=""></option>
                                            @foreach($varieties as $variety)
                                                <option value="{{ $variety->VarietyName }}">{{ $variety->VarietyName }}</option>
                                            @endforeach
                                        </select>
                                        <input type="text" wire:model="LineItems.{{ $index }}.stems" placeholder="Stems">
                                        <a class="btn btn-warning btn-sm waves-effect waves-light" wire:click="removeLineItems({{ $index }})">Remove</a>
                                    </div><hr>
                                @endforeach
                                
                                <a class="btn btn-info waves-effect waves-light" wire:click="addBox">Add</a>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</div>

