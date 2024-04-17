<div class="card">
    <div class="card-header">
        <h5>Varieties</h5>
        <div class="card-header-right">
            <a href="{{ url('/new-variety') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Variety Name</th>
                        <th>Variety Code</th>
                        <th>Flower Type</th>
                        <th>Colour</th>
                        <th>Active</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($varieties as $variety)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $variety->VarietyName }}</td>
                            <td>{{ $variety->VarietyCode }}</td>
                            <td>{{ $variety->FlowerType }}</td>
                            <td>{{ $variety->Colour }}</td>
                            <td>{{ $variety->Active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>