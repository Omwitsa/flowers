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
                <div class="col-xs-12 col-sm-12">
                    <div class="form-group row">
                        <label class="col-xs-12 col-sm-2 col-form-label">Select Range</label>
                        <div class="col-xs-12 col-sm-10">
                            @if($brands === 'AAA ROSES')
                                <select wire:model.live="range" class="form-control">
                                    <option disabled value=""></option>
                                    <option value="Bronze">Bronze</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Spray Deluxe">Spray Deluxe</option>
                                    <option value="Spray Premium">Spray Premium</option>
                                </select>
                            @elseif($brands === 'BELLISSIMA')
                                <select wire:model.live="range" class="form-control">
                                    <option disabled value=""></option>
                                    <option value="Platinum">Platinum</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Gold + Premium">Gold + Premium</option>
                                    <option value="Gold + Deluxe">Gold + Deluxe</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
            </div><br>
            
            <div class="row">
                @foreach ($varieties as $variety)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 variety-section">
                        <img src="{{ $variety->picUrl }}" alt="Flowers" style="width:100%;">
                        <div>{{$variety->varietyName}}</div>
                        <!-- <a href='#' class="btn btn-primary waves-effect waves-light">Add to Cart</a> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderSpecs">
                            Add
                        </button>

                        <div class="modal fade" id="orderSpecs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-xs-12 col-sm-4 col-form-label">Length</label>
                                                <div class="col-xs-12 col-sm-8">
                                                    <select class="form-control">
                                                        <option disabled value=""></option>
                                                        <option value="Bronze">40 cm</option>
                                                        <option value="Silver">50 cm</option>
                                                        <option value="Spray Deluxe">60 cm</option>
                                                        <option value="Spray Premium">70 cm</option>
                                                    </select>
                                                </div>

                                                <label class="col-xs-12 col-sm-4 col-form-label">Box Type</label>
                                                <div class="col-xs-12 col-sm-8">
                                                    <select class="form-control">
                                                        <option disabled value=""></option>
                                                        <option value="Bronze">AAA ZIM 2018 Ref</option>
                                                        <option value="Silver">AAA Standard 2019</option>
                                                        <option value="Spray Deluxe">AAA jUMBO 2019</option>
                                                    </select>
                                                </div>

                                                <label class="col-xs-12 col-sm-4 col-form-label">Quantity</label>
                                                <div class="col-xs-12 col-sm-8">
                                                    <input wire:model="name" name="name" type="text" class="form-control" autocomplete="off" >
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><br>
            <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> -->
        </form> 
    </div>
</div>
