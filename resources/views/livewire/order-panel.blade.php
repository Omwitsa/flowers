<div class="card">
    <div class="card-header">
        <h5>Orders</h5>
    </div>
    <div class="card-block">
        <form wire:submit="creatVariety" class="form-material" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h4 class="sub-title">Brands</h4>
                    <div class="form-check form-check-inline">
                        <input wire:model.change="brands" class="form-check-input" type="radio" id="roses" value="Roses">
                        <label class="form-check-label" for="roses">Roses</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model.change="brands" class="form-check-input" type="radio" id="bellissima" value="Bellissima">
                        <label class="form-check-label" for="bellissima">Bellissima</label>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <!-- <h4 class="sub-title">Range</h4> -->
                    @if($brands === 'Roses')
                        <p>Roses</p>
                    @elseif($brands === 'Bellissima')
                        <p>Bellissima</p>
                    @endif
                </div>
            </div><br>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <!-- Dropdown -->
                    <!-- <h4 class="sub-title">Variety</h4> -->
                    
                </div>
            </div><br>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
        </form> 
    </div>
</div>
