<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>CRUD Operation</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Add New Student</div>
                        <div class="col-md-6">
                            <a href="{{route('home')}}" class="btn btn-success pull-right">All Students</a>
                        </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="saveData">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Student Name" wire:model="name"/>
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Phone:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Student Phone Number" wire:model="phone"/>
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-4">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </div>
