@extends('auth.app')

@section('content')
    <div class="container">
        <div class="col-md-4 m-auto">
            <div class="card card-login card-plain">
                <form class="form" method="post" action="{{route('login')}}">
                    {{ csrf_field() }}
                    <div class="card-header text-center">
                        <h2>Log In</h2>
                    </div>
                    <div class="card-body">
                        <div class="input-group no-border input-lg">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                            </div>
                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email" autofocus>
                        </div>
                        @if($errors->has('email'))
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        @endif
                        
                        <div class="input-group no-border input-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                            </div>
                            <input type="password" placeholder="Enter Password" name="password" class="form-control"/>
                        </div>
                        @if($errors->has('password'))
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        @endif
                    </div>
                    
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection