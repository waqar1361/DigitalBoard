@extends('layouts.app')
@section('content')
    <h1 class="text-center">Create new Notice</h1>
    <form action="">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="">Select PDF or Image</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" placeholder="Select your file" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Publish</button>
        </div>
    </form>
@endsection