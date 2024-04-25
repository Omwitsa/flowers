<div class="card">
    <div class="card-header">
        <h5>Order</h5>
    </div>
    <div class="card-block">
        <form wire:submit="creatVariety" class="form-material" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h4 class="sub-title">Brands</h4>
                    <div class="form-check form-check-inline">
                        <input wire:model.change="brands" class="form-check-input" type="radio" id="roses" value="AAA ROSES">
                        <label class="form-check-label" for="roses">AAA ROSES</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model.change="brands" class="form-check-input" type="radio" id="bellissima" value="BELLISSIMA">
                        <label class="form-check-label" for="bellissima">BELLISSIMA</label>
                    </div>
                </div>
            </div><br><hr>

            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="form-group row">
                        <label class="col-xs-12 col-sm-4 col-form-label">Length</label>
                        <div class="col-xs-12 col-sm-8">
                            <select wire:model.live="length" class="form-control" required>
                                <option disabled value=""></option>
                                <option value="len40">40 cm</option>
                                <option value="len50">50 cm</option>
                                <option value="len60">60 cm</option>
                                <option value="len70">70 cm</option>
                                <option value="len80">80 cm</option>
                                <option value="len90">90 cm</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="form-group row">
                        
                    </div>
                </div>
            </div><br>

            <div class="row">
                @foreach ($groupedVarieties as $groupedVariety)
                    <div class="col-xs-12 col-sm-12">
                        <h5>{{$groupedVariety->name}}</h5><hr>
                        <div class="row">
                            @foreach ($groupedVariety->varieties as $variety)
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 variety-section">
                                    <!-- <img src="{{ $variety->picUrl }}" alt="Flowers" style="width:100%;"> -->
                                    <div class="row variety">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="{{ $variety->picUrl }}" alt="Flowers" style="width:100%;">
                                            <h5>{{$variety->VarietyName}}</h5>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <p><strong>{{$variety->currency}} {{$variety->price}} per stem</strong></p>
                                            <p><strong>BoxType: {{$packRate->Name}}</strong></p>
                                            <p><strong>Packrate: {{$variety->packrate}}</strong></p>
                                            <p><strong>Stems: {{$variety->stems}}</strong></p>
                                            <!-- <p><strong>Stems: {{$packRate->Name}}</strong></p> -->
                                            <div class="form-group">
                                                <input wire:model.live="quantity" type="text" class="form-control form-sm-default" placeholder="Quantity">
                                            </div>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderSpecs">
                                                Buy Me
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderSpecs">
                                                Add
                                            </button> -->

                                            <!-- <div class="modal fade" id="orderSpecs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Specifications</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><br>
                    </div>
                    
                    
                @endforeach

                
            </div><br>
            <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> -->
        </form> 
    </div>
</div>
