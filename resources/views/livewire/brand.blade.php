<div class="card">
    <div class="card-header">
        <h5>Brands</h5>
        <div class="card-header-right">
            <a class="btn btn-primary waves-effect waves-light">New</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->usercode }}</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>