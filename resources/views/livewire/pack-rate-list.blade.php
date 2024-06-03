<div class="card">
    <div class="card-header">
        <h5>Pack Rates</h5>
        <div class="card-header-right">
            <a href="{{ url('new-packrate') }}" class="btn btn-primary waves-effect waves-light">New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packrates as $packrate)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $packrate->Name }}</td>
                            <td>{{ $packrate->active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
