@extends('layouts.back-pages')
@section('content')
	@include('layouts.partial.sidebar')

	<div class="main-panel">

	@include('layouts.partial.topbar')

         <!-- Main Content starts Here -->
{{ $owner_id }}
        <div class="main-content">
            <div class="container-fluid">

                <div class="row">

                    <h4 class="title">Document Registration</h4>
                </div>

                <div class="row card  card-inner-spacer card-inner-top ">
                    
                    <h5 class="bottom-buffer-2">Select Document Type</h5>

                    <div class="col-md-4">
                        <a class="btn btn-wd btn-block" href="{{ route('cofo.create', $owner_id) }}"> Certficate Of Occupancy </a>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-wd btn-block"> Deed of Lease</button>
                    </div>

                    <div class="col-md-4 ">
                        <button class="btn btn-wd btn-block">Deed Of Licence</button>
                    </div>
                        
						
                </div>

                
                

            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

@endsection