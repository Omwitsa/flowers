<div class="card">
    <div class="card-header">
        <h5>Order Summary</h5>
    </div>
    <div class="card-block table-border-style">
        <div class="form-group row">
            <label class="col-xs-12 col-sm-2 col-form-label">Receiving Date</label>
            <div class="col-xs-12 col-sm-2">
                <input wire:model="receivingDate" name="receivingDate" type="date" class="form-control" autocomplete="off" required>
                <x-input-error :messages="$errors->get('receivingDate')" class="mt-2" />
            </div>

            <label class="col-xs-12 col-sm-2 col-form-label">Drop Off</label>
            <div class="col-xs-12 col-sm-2">
                <select wire:model="dropOff" class="form-control" required>
                    <option disabled value=""></option>
                    @foreach($dropoffs as $dropoff)
                        <option value="{{ $dropoff->name }}">{{ $dropoff->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('dropOff')" class="mt-2" />
            </div>
        </div><br>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Length</th>
                        <th>StemQty</th>
                        <th>PackRate</th>
                        <th>Boxes</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($order_lines != null)
                        @foreach ($order_lines as $line)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $line['VarietyName'] }}</td>
                                <td>{{ $line['Length'] }}</td>
                                <td>{{ $line['StemQty'] }}</td>
                                <td>{{ $line['PackRate'] }}</td>
                                <td>{{ $line['Boxes'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <!-- <a href="/" class="btn btn-order btn-inverse waves-effect waves-light">Continue Shopping</a> -->
        <a wire:click="order" class="btn btn-order btn-primary waves-effect waves-light">Order Now</a>
    </div>
</div>