<div class="card">
    <div class="card-header">
        <h5>Orders</h5>
        <div class="card-header-right">
            <!-- <a href="{{ url('/new-user') }}" class="btn btn-primary waves-effect waves-light">New</a> -->
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Id</th>
                        <th>Date Created</th>
                        <th>Receiving Date</th>
                        <th>Lpo No.</th>
                        <th>Status</th>
                        <th>Farm</th>
                        <th>Type</th>
                        <th>Drop Off Id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $order->ClientId }}</td>
                            <td>{{ $order->DateCreated }}</td>
                            <td>{{ $order->ReceivingDate }}</td>
                            <td>{{ $order->LpoNo }}</td>
                            <td>{{ $order->Status }}</td>
                            <td>{{ $order->Farm }}</td>
                            <td>{{ $order->Type }}</td>
                            <td>{{ $order->DropOffId }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>