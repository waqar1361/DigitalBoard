@extends('layouts.dashboard')
@section('title', 'Publish a new Notice/Notification')

@section('dashboard-content')
    <form class="form-signin" action="/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-label-group">
            <input type="text" id="title" name="title"
                   :class="{ ' is-invalid' :  titleError  }" class="form-control"
                   value="{{ old('title') }}" placeholder="Title" @keydown="titleError=false" autofocus>
            <label for="title">Title</label>
            @if ($errors->has('title'))
                <strong class="invalid-feedback">{{ $errors->first('title') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="type">Select Type</label>
            <select id="type" class="custom-select" name="type" required>
                <option value="notice">Notice</option>
                <option value="notification">Notification</option>
            </select>
            @if ($errors->has('type'))
                <strong class="invalid-feedback">{{ $errors->first('type') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="">Select Department</label>
            <select class="custom-select" name="department_id" id="department_id">
                @foreach(\App\Department::all() as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('department_id'))
                <strong class="invalid-feedback">{{ $errors->first('department_id') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="">Select PDF or Image</label>
            <div class="custom-file">
                <input type="file" name="upload_file" :class="{ 'is-invalid' :  fileError  }"
                       class="custom-file-input" @change="fileLabel = $event.target.files[0].name"
                       @focus="fileError=false"  placeholder="Select your file">
                <label class="custom-file-label" for="validatedCustomFile">@{{ fileLabel }}</label>
            @if ($errors->has('upload_file'))
                <strong class="invalid-feedback">{{ $errors->first('upload_file') }}</strong>
            @endif
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Publish</button>
        </div>

    </form>
@endsection
@include('admin.errors')