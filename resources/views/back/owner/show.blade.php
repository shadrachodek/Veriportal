@extends('layouts.back-pages')
@section('content')
@include('layouts.partial.sidebar')

<div class="main-panel">

    @include('layouts.partial.topbar')
        <div class="main-content anchor-styling">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">

                            <h4 class="title">Document Owners -  Bio Data</h4>
                    </div>
                    
                    <div class="col-md-6">
                         <span class="btn-label">
                             <a href="{{ route('documentType', $owner->owner_id) }}" class="btn small-screens-mg btn-default btn-fill btn-wd pull-right btn-top"> <i class="fa fa-pencil"></i>   Add Document </a>
                        </span>

                    </div> 
                </div>
            
                <div class="row modal-modifier doc-view">

                    <!-- Left Panel Starts here-->
                    
                    <div class="col-md-6">
                        <div class="card ">

                            <div class="card-inner-spacer bottom-buffer">
                               <!-- ********first row******** -->
                                <div class="row border-bottom">

                                        <div class="col-md-3">
                                            <h5>First Name</h5>
                                            <h3>{{ $owner->first_name }}</h3>

                                        </div>

                                        <div class="col-md-3">
                                            <h5>Middle Name</h5>
                                            <h3>{{ $owner->middle_name }}</h3>
                                        </div>

                                        <div class="col-md-3">
                                            <h5>Last Name</h5>
                                            <h3>{{ $owner->last_name }}</h3>
                                        </div>

                                        <div class="col-md-3">
                                            <h5>Unique id #</h5>
                                            <h3>{{ $owner->owner_id }}</h3>
                                        </div>

                                </div>
                                    <!-- ********first row******** -->

                                    <!-- ********Second row******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>Date of Birth</h5>
                                                <h3>{{ $owner->date_of_birth }}</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>Marital Status</h5>
                                                <h3>{{ $owner->marital_status }}</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Occupation</h5>
                                                <h3>{{ $owner->occupation }}</h3>
                                            </div>
                
                                            
                
                                    </div>

                                    <!-- ********Second row******** -->

                                    <!-- ********Thirdrow******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-12">
                                                <h5>Street Address</h5>
                                                <h3>{{ $owner->street_address }}</h3>
                
                                            </div>
                
                                    </div>


                                    <!-- ********Thirdrow******** -->

                                    <!-- ********Fourthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>City</h5>
                                                <h3>{{ $owner->city }}</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>LGA/LCDA</h5>
                                                <h3>{{ $owner->lga_lcda }}</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Nearest Bust-Stop</h5>
                                                <h3>{{ $owner->nearest_bus_stop }}</h3>
                                            </div>
                
                                                
                                    </div>


                                    <!-- ********Fourthrow******** -->

                                    <!-- ********Fifthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>Telephone</h5>
                                                <h3>{{ $owner->telephone }}</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>Mobile</h5>
                                                <h3>{{ $owner->mobile }}</h3>
                                            </div>
                
                                            <div class="col-md-6 ">
                                                <h5>Email</h5>
                                                <h3>{{ $owner->email_address }}</h3>
                                            </div>

                                    </div>

                                    <!-- ********Fifthrow******** -->
                                </div>
<!--*****************************************************************************************************************-->
                                <!-- Profile picture and signature starts here-->


                            <div class="doc-view-footer card-inner-spacer pop-out-footer">

                                
                                        <div class="col-md-2">

                                                <div class="avata">
                                                    @if($owner->photo)
                                                    <img class="img border-gray " src="{{ asset('storage/passport/'. $owner->photo->file) }}" alt="photo">
                                                        @else
                                                         <a href="{{ route('photo-signature', $owner->owner_id) }}" class="btn small-screens-mg btn-default btn-fill btn-wd> <i class="fa fa-pencil"></i>   Add Photo </a>

                                                    @endif
                                                </div>
                    
                                        </div>

                                        <div class="col-md-10 ">

                                            <div class="row no-gutter">

                                                <div class="col-md-2">
                                                </div>
                
                                                <div class="col-md-4 ">

                                        
                                                </div>
                                                @if($owner->signature)
                                                <div class="col-md-4  data-cap-white">

                                                    <div class="signature">
                                                        <img src="{{ asset('storage/signature/'. $owner->signature->file) }}" alt="owner's signature">

                                                    </div>

                                                </div>
                                                @else
                                                    <a href="{{ route('photo-signature', $owner->owner_id) }}" class="btn small-screens-mg btn-default btn-fill btn-wd> <i class="fa fa-pencil"></i>   Add Signature </a>
                                                @endif
                                        </div>

                            </div> <!-- Profile picture and signature ends here-->
                            </div> 
                        </div>
<!-- ************************************************Approval button starts Here******************************************************************** -->
                           
                        

                </div><!-- Left Panel ends here-->
          
                
                    
                    <div class="col-md-6 "> <!-- right Panel Starts here-->
                        <div class="card card-inner-spacer bio-data-font-sizer">
                                    <h2> Documents </h2>

                            @foreach($owner->documents as $document)
                            <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">

                                    <h4>ID</h4>
                                    <h3> {{ $document->document_id }} </h3>
                                    <p> Type: {{ $document->documentable_type }} </p>

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="text-right">
                                        <h4>Status </h4>
                                        <h3>{{ $document->status }} </h3>
                                    </div>
                                </div>

                            </div>

                            @endforeach

                                    
                    </div>

                </div><!-- right Panel endshere-->

                
        </div> <!-- row ends here ---->



             </div>
         </div>
   

    </div>
</div>

@endsection