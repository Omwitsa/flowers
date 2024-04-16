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
                        <a href='#' class="btn btn-primary waves-effect waves-light">Add to Cart</a>
                    </div>
                @endforeach
            </div><br>
            <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> -->
        </form> 
    </div>
</div>
