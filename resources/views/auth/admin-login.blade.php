@extends('auth.app')

@section('content')
    <div class="container">
        <div class="col-md-4 m-auto">
            <div class="card card-login card-plain">
                <form class="form" method="post" action="{{ route('admin.login.submit') }}">
                    {{ csrf_field() }}
                    <div class="card-header text-center">
                        <h2>Enter Admin's Password</h2>
                    </div>
                    <div class="card-body">
                        <div class="input-group no-border input-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="email" value="admin@nnb.pk" readonly>
                        </div>
                        <div class="input-group no-border input-lg">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                            </div>
                            <input type="password" placeholder="Password" name="password" class="form-control" autofocus/>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection