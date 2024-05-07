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
            </div><hr>
            
            <div class="row">
                @foreach ($mixedBoxes as $mb_index => $mixedBox)
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <div class="card-block table-border-style">
                                <h5>{{$mixedBox->name}}</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td colspan="2"><span>Total Stems {{$mixedBox->totalStems}}</span> &nbsp;&nbsp;&nbsp; <span>{{$mixedBox->length}} cm</span></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mixedBox->mixBoxLines as $mbl_index => $mixBoxLine)
                                                <tr>
                                                    <td>{{$mixBoxLine->variety}}</td>
                                                    <td>{{$mixBoxLine->stems}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="{{ $mixedBox->id }}">Select</label> &nbsp;&nbsp;
                                            <input wire:key="{{ $mixedBox->id }}" wire:model="mixedBoxes.{{ $mb_index }}.checked" id="{{ $mixedBox->id }}" type="checkbox" class="form-check-input">
                                        </div>
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
