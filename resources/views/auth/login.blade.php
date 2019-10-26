<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('/')}}/back-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/back-end/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('/')}}/back-end/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" name="email" type="email" autofocus required value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" type="password" value="" required>
                            </div>
                            <div class="checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        @endif
                            <!-- Change this to a button or input when using this as a form -->

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="{{asset('/')}}/back-end/js/jquery-1.10.2.js"></script>
<script src="{{asset('/')}}/back-end/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/back-end/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="{{asset('/')}}/back-end/js/sb-admin.js"></script>

</body>

</html>
