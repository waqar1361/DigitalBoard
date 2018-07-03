<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.jpg">

    <title>Admin</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/signin.css" rel="stylesheet">

</head>

<body>
<form class="form-signin text-white" action="{{ route('login') }}" method="post">

    {{ csrf_field() }}

    <div class="text-center mb-2">
        <img class="mb-4 outset-shadow" src="/logo.jpg" alt="Logo" width="120" height="120">
    </div>

    <h4 class="mb-4">Sign in as Admin to continue</h4>

    <div class="form-label-group">
        <input type="email" id="Email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        <label for="Email">Email address</label>
        @if ($errors->has('email'))
            <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-label-group">
        <input type="password" id="Password" name="password" class="form-control" placeholder="Password" required>
        <label for="Password">Password</label>
        @if ($errors->has('password'))
            <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
        </label>
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-secondary btn-block" type="submit">Sign in</button>
    </div>
    <div class="text-center">
        <a href="/">Home</a>
    </div>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-{{date('Y')}}</p>
</form>
</body>
</html>
