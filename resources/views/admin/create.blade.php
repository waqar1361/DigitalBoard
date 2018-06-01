@extends('layouts.dashboard')
@section('title', 'Publish a new Notice/Notification')

@section('dashboard-content')
    @if($errors)
        {{ $errors->first('title') }}
    @endif
    <form class="form-signin" action="/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-label-group">
            <input type="text" id="title" name="title" class="form-control" placeholder="Title" autofocus required>
            <label for="title">Title</label>
        </div>

        <div class="form-group">
            <label for="type">Select Type</label>
            <select id="type" class="custom-select" name="type" required>
                <option value="notice">Notice</option>
                <option value="notification">Notification</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Select Department</label>
            <select class="custom-select" name="dept_id" required>
                @foreach(\App\Department::all() as $item)
                    <option value="{{ $item->ID }}" {{ $loop->first ? "selected" : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Select PDF or Image</label>
            <div class="custom-file">
                <input type="file" name="upload_file" class="custom-file-input" placeholder="Select your file" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose PDF File</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Publish</button>
        </div>
    </form>

@endsection