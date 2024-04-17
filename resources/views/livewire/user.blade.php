<div class="card">
    <div class="card-header">
        <h5>Users</h5>
        <div class="card-header-right">
            <a href="{{ url('/new-user') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->usercode }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->active }}</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>