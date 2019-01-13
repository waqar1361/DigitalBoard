@extends('auth.app')

@section('content')
    <div class="container">
        <div class="col-md-4 m-auto">
            <div class="card card-login card-plain">
                <form class="form" method="post" action="{{route('register')}}">
                    {{ csrf_field() }}
                    <div class="card-header text-center">
                        <h2>Register Now</h2>
                    </div>
                    <div class="card-body">
                        <div class="input-group no-border input-lg">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="Enter Your Name"
                                   autofocus>
                        </div>
                        @if($errors->has('name'))
                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                        @endif
                        
                        <div class="input-group no-border input-lg">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="Enter Your Email"/>
                        </div>
                        @if($errors->has('email'))
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        @endif
                    </div>
                    
                    <div class="input-group no-border input-lg">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                               placeholder="Enter New Password"/>
                    </div>
                    @if($errors->has('password'))
                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                    @endif
                    
                    <div class="input-group no-border input-lg">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old
                        ('password_confirmation') }}" placeholder="Re-type Password "/>
                    </div>
                    @if($errors->has('password_confirmation'))
                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                    @endif
                    
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
