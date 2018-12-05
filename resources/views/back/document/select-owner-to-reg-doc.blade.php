@extends('layouts.back-pages')
@section('content')
	@include('layouts.partial.sidebar')

	<div class="main-panel">

	@include('layouts.partial.topbar')

         <!-- Main Content starts Here -->

        <div class="main-content">
            <div class="container-fluid">

                    <h4 class="title">Document Registration</h4>

                <div class="row card card-inner-spacer card-inner-top card-inner-bottom">
                    <form method="POST" action="{{ route('owner-that-need-document') }}">
						@csrf
						<div class="col-md-4 col-md-offset-4">

							<h5  class="text-center"> Enter Owner ID </h5>

							<div class="input-group">
								<input type="text" name="owner_id" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
								@if ($errors->has('owner_id'))
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('owner_id') }}</strong>
                                    </span>
								@endif
								@if (session('error'))
									<div class="alert alert-danger">{{ session('error') }}</div>
								@endif
								<span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-fill btn-wd"> Submit </button>
                           	 </span>

							</div><!-- /input-group -->
						</div>
					</form>

						


						<div class="col-md-12 text-center top-buffer-3">
						<p> OR </p>
						</div>

						<div class="col-md-12 text-center top-buffer-3">
							<a class="btn btn-default btn-fill btn-wd" href="{{ route('owner.create') }}"> Register New Owner </a>
						</div>
						
                </div>

                
                

            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

@endsection