<div class="card">
    <div class="card-header">
        <h5>Categories</h5>
        <div class="card-header-right">
            <a href="{{ url('/new-client-category') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
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
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>