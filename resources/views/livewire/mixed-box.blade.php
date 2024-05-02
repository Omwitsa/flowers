<div class="card">
    <div class="card-header">
        <h5>Mixed Box</h5>
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
            </div><br>

            <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> -->
        </form> 
    </div>
</div>
