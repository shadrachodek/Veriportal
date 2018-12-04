@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content">
            <div class="container-fluid">

                    <a href="{{ route('batch.list', $document->batch_id) }}" class="btn bottom-buffer-2 tweaked-margin btn-success btn-fill small-btn "> <i class="fa fa-angle-left"></i> Back to Batch - {{ $document->batch_id }}</a>

                <div class="row modal-modifier doc-view">

                    <!-- Left Panel Starts here-->
                    
                    <div class="col-md-6">
                        <div class="card ">

                            <div class="card-inner-spacer bottom-buffer">
                               <!-- ********first row******** -->
                                <div class="row border-bottom">

                                        <div class="col-md-3">
                                            <h5>First Name</h5>
                                            <h3>{{ $document->owner->first_name }}</h3>

                                        </div>

                                        <div class="col-md-3">
                                            <h5>Middle Name</h5>
                                            <h3>{{ $document->owner->middle_name }}</h3>
                                        </div>

                                        <div class="col-md-3">
                                            <h5>Last Name</h5>
                                            <h3>{{ $document->owner->last_name }}</h3>
                                        </div>

                                        <div class="col-md-3">
                                            <h5>Unique id #</h5>
                                            <h3>{{ $document->document_id }}</h3>
                                        </div>

                                </div>
                                    <!-- ********first row******** -->

                                    <!-- ********Second row******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>Date of Birth</h5>
                                                <h3>{{ $document->owner->date_of_birth }}</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>Marital Status</h5>
                                                <h3>{{ $document->owner->marital_status }}</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Occupation</h5>
                                                <h3>{{ $document->owner->occupation }}</h3>
                                            </div>
                
                                            
                
                                    </div>

                                    <!-- ********Second row******** -->

                                    <!-- ********Thirdrow******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-12">
                                                <h5>Street Address</h5>
                                                <h3>{{ $document->owner->address }}</h3>
                
                                            </div>
                
                                    </div>


                                    <!-- ********Thirdrow******** -->

                                    <!-- ********Fourthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>City</h5>
                                                <h3>{{ $document->owner->city }}</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>LGA/LCDA</h5>
                                                <h3>{{ $document->owner->lga_lcda }}</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Nearest Bust-Stop</h5>
                                                <h3>{{ $document->owner->nearest_bus_stop }}</h3>
                                            </div>
                
                                                
                                    </div>


                                    <!-- ********Fourthrow******** -->

                                    <!-- ********Fifthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>Telephone</h5>
                                                <h3>{{ $document->owner->telephone }}</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>Mobile</h5>
                                                <h3>{{ $document->owner->mobile }}</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Email</h5>
                                                <h3>{{ $document->owner->email_address }}</h3>
                                            </div>

                                    </div>

                                    <!-- ********Fifthrow******** -->
                                </div>
<!--*****************************************************************************************************************-->
                                <!-- Profile picture and signature starts here-->
                            <div class="doc-view-footer card-inner-spacer">

                                
                                        <div class="col-md-2">

                                                <div class="avata">
                    
                                                <img class="img border-gray " src="{{ asset('img/faces/face-1.jpg') }}" alt="photo">
                    
                                                </div>
                    
                                        </div>

                                        <div class="col-md-8 col-md-offset-1 data-cap-white">

                                                <div class="signature">
                                                <img src="{{ asset('/img/signature.png') }}" alt="owner's signature">
                                                        
                                        </div>            
                            </div> <!-- Profile picture and signature ends here-->
                            </div> 
                        </div>
                </div><!-- Left Panel ends here-->
          
                
                    
                    <div class="col-md-6"> <!-- right Panel Starts here-->
                        <div class="card card-inner-spacer">
                                    <h2> Documents </h2>

                            <div class="row ">

                                <div class="col-md-6">

                                    <p>Document Type</p>
                                    <h3>{{ $document->documentable_type }}</h3>
                                        
                                </div>

                                <div class="col-md-6">
                                    <div class="pull-right">
                                        <p>Document ID</p>
                                        <h3>#{{ $document->document_id }}</h3>
                                    </div>
                                </div>

                        </div>
                        <!--***************************************************-->

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>House Number / Plot Number</h5>
                                    <h3>{{ $document->documentable->house_plot_number }}</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Street Name </h5>
                                    <h3>{{ $document->documentable->street_name }}</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>City</h5>
                                    <h3>{{ $document->documentable->city }}</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Local Government </h5>
                                    <h3>{{ $document->documentable->lga }}</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h5>Survey Plan Number</h5>
                                    <h3>{{ $document->documentable->survey_plan_number }}</h3>
    
                                </div>
    
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>Dimension Area (SQM)</h5>
                                    <h3>{{ $document->documentable->dimension }}</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Development Period </h5>
                                    <h3>{{ $document->documentable->development_period }}</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>Purpose of Use</h5>
                                    <h3>{{ $document->documentable->purpose_of_use }}</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Commencement Year </h5>
                                    <h3>{{ $document->documentable->commencement_year }}</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">
 
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>Building Value</h5>
                                    <h3>{{ $document->documentable->building_value }}</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Yearly Rent Payable </h5>
                                    <h3>{{ $document->documentable->yearly_rent_payable }}</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">
 
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Term </h5>
                                    <h3> {{ $document->documentable->term }} </h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> revision period </h5>
                                    <h3>{{ $document->documentable->revision_period }}</h3>
                                </div>
     
                        </div>

                                    
                    </div>

                </div><!-- right Panel endshere-->


                <div class="col-md-3 col-md-offset-3">

                        <button class="btn bottom-buffer-3 tweaked-margin btn-success btn-fill small-btn btn-block"><i class="fa fa-angle-left"></i><a href="document-batch-view-oluwole.html">Back</a></button>

                </div>

                <div class="col-md-3 ">

                        <button class="btn bottom-buffer-3 tweaked-margin btn-success btn-fill small-btn btn-block"><a href="#">Next</a><i class="fa fa-angle-right"></i></button>

                </div>


                            
        </div> <!-- row ends here ---->


       
      </div>
     
    </div>
  </div>
</div>


            </div>
        </div>


        

    </div>
</div>

@endsection