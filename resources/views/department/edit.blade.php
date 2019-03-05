@extends("admin.layouts.app")
@section('name','Update Department')

@section('content')

    <div class="panel-header panel-header-sm">
    </div>

    <div class="content">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Department</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('departments.update',$department->name)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name"
                                   class="form-control" placeholder="Name"
                                   value="{{ $department->name }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="fullName">Full Name [Optional]</label>
                            <input type="text" id="fullName" name="full_name" class="form-control"
                                   value="{{ $department->full_name }}" placeholder="Full Name" autofocus>
                        </div>

                        <div class="form-group d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-success col-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection