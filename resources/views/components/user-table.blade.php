<div class="card">
    <h5 class="card-header"> Users </h5>
    <div class="card-datatable table-responsive">
        <table class="dt-responsive table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created at</th>
                </tr>
            </thead>

            @foreach ($userdatafromdb as $users)
                <tbody>
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->password}}</td>
                        <td>{{$users->created_at}}</td>
                    </tr>
                </tbody>
            @endforeach

            {{-- <tfoot>
               
            </tfoot> --}}
        </table>
    </div>
</div>


