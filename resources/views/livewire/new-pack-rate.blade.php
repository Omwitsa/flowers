<div class="card">
    <div class="card-header">
        <h5>Packrate</h5>
    </div>
    <div class="card-block">
        <form wire:submit="createPackRate" class="form-material" autocomplete="off">
            @csrf
            <!-- Row start -->
            <div class="row m-b-30">
                <div class="col-xs-12 col-sm-12">
                    <ul class="nav nav-tabs md-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#header" role="tab">Packrate</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#lineItem" role="tab">Packrate Line</a>
                            <div class="slide"></div>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content card-block">
                        <div class="tab-pane active" id="header" role="tabpanel">
                            <div class="form-group row">
                                <label class="col-xs-12 col-sm-2 col-form-label">Packrate</label>
                                <div class="col-xs-12 col-sm-4">
                                    <input wire:model="Name" name="Name" type="text" class="form-control" autocomplete="off" required>
                                    <x-input-error :messages="$errors->get('Name')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="lineItem" role="tabpanel">
                            <div>
                                @foreach($packrateLines as $index => $item)
                                    <div>
                                        <select wire:model="packrateLines.{{ $index }}.variety" required>
                                            <option disabled value=""></option>
                                            @foreach($varieties as $variety)
                                                <option value="{{ $variety->VarietyName }}">{{ $variety->VarietyName }}</option>
                                            @endforeach
                                        </select>
                                        <input type="text" wire:model="packrateLines.{{ $index }}.len40" placeholder="length 40">
                                        <input type="text" wire:model="packrateLines.{{ $index }}.len50" placeholder="length 50">
                                        <input type="text" wire:model="packrateLines.{{ $index }}.len60" placeholder="length 60">
                                        <input type="text" wire:model="packrateLines.{{ $index }}.len70" placeholder="length 70">
                                        <input type="text" wire:model="packrateLines.{{ $index }}.len80" placeholder="length 80">
                                        <input type="text" wire:model="packrateLines.{{ $index }}.len90" placeholder="length 90">
                                        <a class="btn btn-warning btn-sm waves-effect waves-light" wire:click="removePackRateLine({{ $index }})">Remove</a>
                                    </div><hr>
                                @endforeach
                                
                                <a class="btn btn-info waves-effect waves-light" wire:click="addPackRateLine">Add</a>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</div>

