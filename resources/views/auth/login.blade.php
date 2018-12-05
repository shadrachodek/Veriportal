@extends('layouts.back-login')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row no-gutter">

                <div class="col-md-6 col-sm-6 col-lg-6 left-panel">
                    <div class="">
                        <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
                    </div>
                </div>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-6 col-sm-12  col-lg-6 right-panel">

                    <div class="">

                        <div class="col-md-8 col-md-offset-2 col-sm-12 ">

                            <div class="form-align vertical-alignment">
                                <form class="signin-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h2 class="text-center">Administration</h2>
                                    <p class="text-center text-muted"> Welcome Back! Please login to your account</p>
                                    <div class="content">
                                        <div class="form-group">
                                            <div>
                                                <input id="username" placeholder="Username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                                @if ($errors->has('username'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <input id="password" placeholder="Password"  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="top-buffer-2 bottom-buffer-2">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <span class="form-check-sign "></span>
                                                    Remember me
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-fill  btn-wd">Login</button>
                                    </div>


                                </form>

                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>

@endsection