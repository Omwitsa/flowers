<div class="card">
    <div class="card-header">
        <h5>Brands</h5>
        <div class="card-header-right">
            <a href="{{ url('/new-brand') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Farm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->farm }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>