<div class="card">
    <div class="card-header">
        <h5>Clients</h5>
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
                        <th>Client Name</th>
                        <th>Client Code</th>
                        <th>Client Type</th>
                        <th>Drop Off</th>
                        <th>Category</th>
                        <th>Client Division</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>