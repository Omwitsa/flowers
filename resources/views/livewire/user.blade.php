<div class="card">
    <div class="card-header">
        <h5>Users</h5>
        <div class="card-header-right">
            <a href="{{ url('new-user') }}" class="btn btn-primary waves-effect waves-light">New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $user->usercode }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->active }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <button wire:click="edit({{ $user->id }})" wire:key="{{ $user->id }}" type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>|
                                <button wire:click="delete({{ $user->id }})" wire:key="{{ $user->id }}" wire:confirm="Are you sure you want to delete?" type="button" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>