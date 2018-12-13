@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

    @include('layouts.partial.topbar')

         <!-- Main Content starts Here -->

        <div class="main-content">
            <div class="container-fluid">

                    <h4 class="title">New User Registration</h4>

                <div class="row card card-inner-spacer card-inner-top card-inner-bottom">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<form method="post" action="{{ route('user-management.store') }}">
    @csrf
                    <!-- First row of inputs -->

                    <div class="col-md-4">

                            <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" value="{{ old('first_name') }}" name="first_name" placeholder="Enter first name" class="form-control" />
                            </div>

                    </div>

                    <div class="col-md-4">

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" value="{{ old('last_name') }}" name="last_name" placeholder="Enter Last Name" class="form-control" />
                            </div>
                        
                    </div>

                    <div class="col-md-4">

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" value="{{ old('phone') }}" name="phone" placeholder="Enter Phone Number" class="form-control" />

                            </div>
                        
                    </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                        <label>City</label>
                                        <div class="form-group">
                                        <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}">
                                        </div>
                                </div>
                        </div>
    
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label>Lga / Lcda</label>
                                    <div>
                                        <select name="lga_lcda" class="selectpicker bottom-buffer"  data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                            @foreach($lgas as $lga)
                                                <option> {{ $lga }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email Address</label>
                                <div>
                                    <input type="text" value="{{ old('email') }}" name="email" placeholder="Enter Email Address" class="form-control" />
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Role</label>
                                <div>
                                    <select name="role" class="selectpicker bottom-buffer"  data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                        @foreach($roles as $role)
                                            <option> {{ title_case($role) }}</option>
                                        @endforeach

                                    </select>

                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('role') }}</strong>
                                                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Username</label>
                                <div>
                                    <input type="text" value="{{ old('username') }}" name="username" placeholder="Enter Username" class="form-control" />
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Password</label>
                                <div>
                                    <input type="text" value="{{ old('password') }}" name="password" placeholder="Enter Password" class="form-control" />
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-default btn-fill btn-block mg-top"> Submit & Continue </button>
                        </div>
</form>
                </div>

            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

@endsection
