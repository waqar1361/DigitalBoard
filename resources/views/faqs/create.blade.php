@extends('layouts.app')
@section('page','landing')
@section('header')
    <div class="page-header page-header-mini" filter-color="">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{config('app.image-path')}});">
        </div>
        <div class="container">
            <h2 class="text-capitalize">Support</h2>
            <p>Submit your question, we'll answer your question with in 3 business days</p>
        </div>
    </div>
@endsection
@section('content')
    <div class="my-5">
        <section class="card">
            <div class="col-md">
                
                <h2 class="card-header">What is your Question?</h2>
                
                <form action="/support" method="post" class="card-body">
                    <p>How can we help you? Provide details in given fields</p>
                    {{ csrf_field() }}
                    
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}"
                                   id="name" name="name"
                                   value="{{ old('name') }}" placeholder="Your Name">
                            @if($errors->has('name'))
                                <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}"
                                   id="email" name="email"
                                   value="{{ old('email') }}" placeholder="Your Email for contact">
                            @if($errors->has('email'))
                                <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="question" class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-10">
                            <textarea type="text"
                                      class="form-control {{ $errors->has('question') ? "is-invalid" : "" }}"
                                      id="question" name="question"
                                      value="{{ old('question') }}" rows="7" placeholder="Your Question">{{ old('question') }}</textarea>
                            @if($errors->has('question'))
                                <strong class="invalid-feedback">{{ $errors->first('question') }}</strong>
                            @endif
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary fa-pull-right">Submit</button>
                
                
                </form>
            </div>
  
            <div class="col-md card-body">
                <h2>For More Information</h2>
                <div class="container-fluid">
                    <strong>Contact :</strong>
                    <span>0300-1234567</span>
                </div>
                <div class="container-fluid">
                    <strong>E-Mail :</strong>
                    <span>info@nnb.com</span>
                </div>
            </div>
        </section>
    </div>

@endsection