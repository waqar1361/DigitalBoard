@extends("admin.layouts.app")
@section('name','Create Department')

@section('content')
    
    <div class="panel-header panel-header-sm">
    </div>
    
    <div class="content">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create new Department</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store.dept')}}" id="form" method="post" @submit.prevent="saveDept">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" :class="{ 'is-invalid' :  nameError  }" class="form-control" v-model="name" placeholder="Name" @keydown="errors=false" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="fullName">Full Name [Optional]</label>
                            <input type="text" id="fullName" name="full_name" class="form-control" v-model="full_name"
                                   placeholder="Full Name" autofocus>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="type">Type</label>--}}
                            {{--<select name="type" id="type" class="custom-select" :class="{ 'is-invalid' :--}}
                            {{--typeError  }"--}}
                                    {{--v-model="type">--}}
                                {{--<option value="Government">Government</option>--}}
                                {{--<option value="Semi-Government">Semi Government</option>--}}
                                {{--<option value="Private">Private</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        <div class="form-group d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-success col-2">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection