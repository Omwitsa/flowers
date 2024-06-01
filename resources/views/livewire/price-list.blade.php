<div class="card">
    <div class="card-header">
        <h5>Prices</h5>
        <div class="card-header-right">
            <a href="{{ url(env('APP_ROOT').'new-price') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Currency</th>
                        <th>Active</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($prices as $price)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $price->Name }}</td>
                            <td>{{ $price->Currency }}</td>
                            <td>{{ $price->active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>