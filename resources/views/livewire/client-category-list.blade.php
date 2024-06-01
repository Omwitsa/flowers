<div class="card">
    <div class="card-header">
        <h5>Client Categories</h5>
        <div class="card-header-right">
            <a href="{{ url(env('APP_ROOT').'new-client-category') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
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
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->active }}</td>
                            <td>
                                <button wire:click="edit({{ $category->id }})" wire:key="{{ $category->id }}" type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>|
                                <button wire:click="delete({{ $category->id }})" wire:key="{{ $category->id }}" wire:confirm="Are you sure you want to delete?" type="button" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>