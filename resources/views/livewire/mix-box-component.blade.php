<div class="card">
    <div class="card-header">
        <h5>Mixed Boxes</h5>
        <div class="card-header-right">
            <a href="{{ url('new-mixed-box') }}" class="btn btn-primary waves-effect waves-light">New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Length</th>
                        <th>Active</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($boxes as $box)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $box->name }}</td>
                            <td>{{ $box->brand }}</td>
                            <td>{{ $box->length }}</td>
                            <td>{{ $box->active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>