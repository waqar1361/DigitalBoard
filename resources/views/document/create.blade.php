@extends('layouts.dashboard')
@section('title', 'Publish a new Notice/Notification')

@section('dashboard-content')
    {{ $massage or "" }}
    <form class="form-signin" action="/documents" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="{{ $errors->has('subject')? "is-invalid" : "" }} form-control" value="{{ old('subject') }}" placeholder="Subject of document" autofocus>
            @if ($errors->has('subject'))
                <strong class="invalid-feedback">{{ $errors->first('subject') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" id="tags" name="tags" class="{{ $errors->has('tags')? "is-invalid" : "" }} form-control" value="{{ old('tags') }}" placeholder="Tags like Important etc" >
            <small id="passwordHelpBlock" class="form-text text-muted">
                Add tags for search, separate each by ","
            </small>
            @if ($errors->has('tags'))
                <strong class="invalid-feedback">{{ $errors->first('tags') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="issued_at">Date when issued</label>
            <input type="date" id="issued_at" name="issued_at" class="form-control {{ $errors->has('issued_at')? "is-invalid" : "" }}" value="{{ old('issued_at') }}" placeholder="issued_at" >

            @if ($errors->has('issued_at'))
                <strong class="invalid-feedback">{{ $errors->first('issued_at') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="type">Select Type</label>
            <select id="type" class="custom-select {{ $errors->has('type')? "is-invalid":"" }}" name="type" required>
                <option value="notice">Notice</option>
                <option value="notification">Notification</option>
            </select>
            @if ($errors->has('type'))
                <strong class="invalid-feedback">{{ $errors->first('type') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="department">Select Department</label>
            <select class="custom-select {{ $errors->has('department')? "is-invalid":"" }}" name="department" id="department">
                @foreach(\App\Department::all() as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('department'))
                <strong class="invalid-feedback">{{ $errors->first('department') }}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="">Select File PDF or Image or Docx</label>
            <div class="custom-file">
                <input type="file" name="upload_file" class="custom-file-input {{ $errors->has('upload_file')? "is-invalid":"" }}" @change="fileLabel = $event.target.files[0].name" placeholder="Select your file">
                <label class="custom-file-label" for="validatedCustomFile">Choose Your File</label>
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
