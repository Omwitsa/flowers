<div class="card">
    <div class="card-header">
        <h5>Sub Categories</h5>
        <div class="card-header-right">
            <!-- <a href="{{ url('/new-sub-category') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a> -->
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
                        <!-- <th></th> -->
                    </tr>
                </thead>

                <tbody>
                    @foreach ($subCategories as $subCategory)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $subCategory->Name }}</td>
                            <td>{{ $subCategory->HeadSize }}</td>
                            <td>{{ $subCategory->Brand }}</td>
                            <td>{{ $subCategory->active }}</td>
                            <!-- <td>
                                <button wire:click="edit({{ $subCategory->id }})" wire:key="{{ $subCategory->id }}" type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>|
                                <button wire:click="delete({{ $subCategory->id }})" wire:key="{{ $subCategory->id }}" wire:confirm="Are you sure you want to delete?" type="button" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>