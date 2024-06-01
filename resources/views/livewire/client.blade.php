<div class="card">
    <div class="card-header">
        <h5>Clients</h5>
        <div class="card-header-right">
            <a href="{{ url('new-client') }}" class="btn btn-primary waves-effect waves-light" wire:navigate>New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Drop Off</th>
                        <th>Category</th>
                        <th>Division</th>
                        <th>Price</th>
                        <th>PackRate</th>
                        <th>Currency</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $client->ClientName }}</td>
                            <td>{{ $client->ClientCode }}</td>
                            <td>{{ $client->ClientType }}</td>
                            <td>{{ $client->DropOff }}</td>
                            <td>{{ $client->Category }}</td>
                            <td>{{ $client->ClientDivision }}</td>
                            <td>{{ $client->Price }}</td>
                            <td>{{ $client->PackRate }}</td>
                            <td>{{ $client->Currency }}</td>
                            <td>
                                <button wire:click="edit({{ $client->id }})" wire:key="{{ $client->id }}" type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>|
                                <button wire:click="delete({{ $client->id }})" wire:key="{{ $client->id }}" wire:confirm="Are you sure you want to delete?" type="button" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>