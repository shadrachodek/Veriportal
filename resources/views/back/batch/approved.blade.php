@extends('layouts.back-pages')
@section('content')
	@include('layouts.partial.sidebar')

	<div class="main-panel">

	@include('layouts.partial.topbar')

         <!-- Main Content starts Here -->

        <div class="main-content">
            <div class="container-fluid">

                    

                <div class="row top-buffer-3">

                        <div class="card  col-md-6 col-md-offset-3 card-inner-top-2">

                                <h5 class="sub-title"> Batch ID - 56781263 </h5>

                                <div class="col-md-12 text-center">

                                    <h4>Batch Singed and Read For Printing</h4>

                                </div>
                            
                                <div class="col-md-4 top-buffer-2">

                                        <button class="btn bottom-buffer-3 tweaked-margin btn-default btn-fill btn-wd btn-block"><a href="document-batch-view.html">Back to Document Batches</a></button>
                
                                </div>
                
                                <div class="col-md-offset-4 col-md-4 top-buffer-2">
                
                                        <button class="btn bottom-buffer-3 tweaked-margin btn-default btn-fill btn-wd btn-block"><a href="document-approved.html">See Approved Documents</a></button>
                
                                </div>
                


                        </div>


                        
                </div>
            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

	@endsection