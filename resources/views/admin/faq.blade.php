@extends('admin.layouts.app')

{{--@section('name','Answer FAQ\'s')--}}

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    
    <div class="content">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Question: {{ $faq->question }}</h4>
                </div>
                <div class="card-body">
                    
                    
                    <form action="{{route('admin.store.answer',$faq->id)}}" method="post" class="col-8">
                        
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        
                        <h4>Answer :</h4>
                        <div class="form-group">
            <textarea type="text"
                      class="form-control {{ $errors->has('answer') ? "is-invalid" : "" }}"
                      id="answer" name="answer"
                      rows="7"
                      placeholder="Your Answer for this Question">{{ $faq->answer or old('answer') }}</textarea>
                            @if($errors->has('answer'))
                                <strong class="invalid-feedback">{{ $errors->first('answer') }}</strong>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection