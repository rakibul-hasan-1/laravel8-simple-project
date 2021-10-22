<div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>CRUD Operation</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">All Student</div>
                        <div class="col-md-6">
                            <a href="{{route('add.home')}}" class="btn btn-success pull-right">Add New Student</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $data as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->phone}}</td>
                                <td>
                                    <a href="{{route('edit.home',['student_id'=>$data->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirm('Are you Sure, You Want to delete this Item?')||event.stopImmediatePropagation()" wire:click.prevent="delete({{$data->id}})">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
