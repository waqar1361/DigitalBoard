@extends('layouts.dashboard')

@section('title', "Answer")
@section('content')
    
    <h2>Question:
        <small>{{ $faq->question }}</small>
    </h2>
    
    <form action="/faqs/{{$faq->id}}/answer" method="post" class="col-8">
        
        {{ csrf_field() }}
        
        
        <h2>Answer :</h2>
        <div class="form-group">
            <textarea type="text"
                      class="form-control {{ $errors->has('answer') ? "is-invalid" : "" }}"
                      id="answer" name="answer"
                      value="{{ old('answer') }}" rows="7"
                      placeholder="Your Answer for this Question">{{ old('answer') }}</textarea>
            @if($errors->has('answer'))
                <strong class="invalid-feedback">{{ $errors->first('answer') }}</strong>
            @endif
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>

@endsection