<div class="card">
    <div class="card-header">
        <h5>Drop Offs</h5>
        <div class="card-header-right">
            <a href="{{ url('/new-dropoff') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dropoffs as $dropoff)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $dropoff->name }}</td>
                            <td>{{ $dropoff->active }}</td>
                            <td>
                                <button wire:click="edit({{ $dropoff->id }})" wire:key="{{ $dropoff->id }}" type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>|
                                <button wire:click="delete({{ $dropoff->id }})" wire:key="{{ $dropoff->id }}" wire:confirm="Are you sure you want to delete?" type="button" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>