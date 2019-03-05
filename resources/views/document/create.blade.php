@extends('admin.layouts.app')
@section('name', 'Publish Notice/Notification')

@section('content')
    <div class="panel-header panel-header-sm"></div>
    
    
    <div class="content">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload New Notice/Notification</h4>
                </div>
                <div class="card-body">
                    <form class="form-signin" action="{{ route('store.doc') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
    
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="notice" name="type" value="notice" class="custom-control-input" checked>
                                <label class="custom-control-label" for="notice">Notice</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="notification" name="type" value="notification"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="notification">Notification</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="{{ $errors->has('subject')? "is-invalid" : "" }} form-control" value="{{ old('subject') }}" placeholder="Subject of document" autofocus>
                            @if ($errors->has('subject'))
                                <strong class="invalid-feedback">{{ $errors->first('subject') }}</strong>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="tags">Tags [optional]</label>
                            <input type="text" id="tags" name="tags" class="{{ $errors->has('tags')? "is-invalid" : "" }} form-control" value="{{ old('tags') }}" placeholder="Tags like Important etc">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Add tags for search, separate each by ","
                            </small>
                            @if ($errors->has('tags'))
                                <strong class="invalid-feedback">{{ $errors->first('tags') }}</strong>
                            @endif
                        </div>
    
                        <div class="form-group">
        
                            <label for="custom-file">Select File PDF or Image or Docx</label>
                            <div class="custom-file" id="custom-file">
                                <input type="file" id="validatedCustomFile" name="upload_file" class="custom-file-input {{ $errors->has
                                    ('upload_file')? "is-invalid":"" }}" @change="fileLabel = $event.target.files[0].name"
                                       placeholder="Select your file">
                                <label class="custom-file-label" for="validatedCustomFile">Choose Your File</label>
                                @if ($errors->has('upload_file'))
                                    <strong class="invalid-feedback">{{ $errors->first('upload_file') }}</strong>
                                @endif
                            </div>
    
                        </div>
    
                        <div class="form-group">
                            <label for="department">Select Department</label>
                            <div>
                                <select class="custom-select col-3 {{ $errors->has('department')? "is-invalid":"" }}"
                                        name="department" id="department">
                                    @foreach(Dept::orderBy('name')->get() as $item)
                                        <option class="text-capitalize" value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('department'))
                                    <strong class="invalid-feedback">{{ $errors->first('department') }}</strong>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="issued_at">Date when issued</label>
                            <input type="text" data-type="date" id="issued_at" name="issued_at" class="form-control col-3 {{
                            $errors->has
                            ('issued_at')? "is-invalid" : "" }}" value="{{ old('issued_at') }}" placeholder="issued_at"  autocomplete="off">
        
                            @if ($errors->has('issued_at'))
                                <strong class="invalid-feedback">{{ $errors->first('issued_at') }}</strong>
                            @endif
    
                        </div>
    
    
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Publish</button>
                        </div>
                    
                    </form>
                
                </div>
            </div>
        </div>
    </div>
   
@endsection
