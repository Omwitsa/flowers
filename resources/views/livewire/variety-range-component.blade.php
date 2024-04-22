<div class="card">
    <div class="card-header">
        <h5>Variety Ranges</h5>
        <div class="card-header-right">
            <a href="{{ url('/new-variety-range') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>HeadSize</th>
                        <th>Brand</th>
                        <th>Active</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($varieties as $variety)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $variety->Name }}</td>
                            <td>{{ $variety->HeadSize }}</td>
                            <td>{{ $variety->Brand }}</td>
                            <td>{{ $variety->active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>