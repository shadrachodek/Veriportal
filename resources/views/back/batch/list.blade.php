@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling">
            <div class="container-fluid ">

                <div class="row ">

                   

                            <h4 class="title">Document Batches</h4>
                    
                    
                    
                </div>

                    <div class="row"> 

                            <div class="card card-inner-spacer card-inner-bottom-2">
                            
                                <div class="row">

                                            
                                        <div class="col-md-4"> 
                                                
                                                <h5 class="sub-title-2">Batch ID - {{ $batchDoc->batch_id }}</h5>
                    
                                        </div>

                                        <div class="col-md-4"> 
                    
                                                <h5 class="sub-title-2">{{ $batchDoc->number_of_document }} - Available Documents</h5>
                     
                                            </div>

                                       
                                        <div class="col-md-4 text-right"> 
                                                
                                            <button class="btn tweaked-margin btn-success btn-fill small-btn "><i class="fa fa-check"></i><a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter">Approve Batch </a></button>
                                            <button class="btn btn-warning btn-fill small-btn "><i class="fa fa-times"></i><a href="#ModalCenter-2" data-toggle="modal" data-target="#ModalCenter-2">Decline Batch</a></button>
                                            
                                        </div>

                                </div>



                                <div class="content">
                                    
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Document ID</th>
                                                    <th>Document Type</th>
                                                    <th>Status</th>
                                                    <th>Owners Last Name</th>
                                                    <th>Owners First Name</th>
                                                    <th class="text-right">View</th>
                                                    
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($batchDoc->documents as $document)
                                                <tr>

                                                    <td>{{ $document->document_id }}</td>
                                                    <td>{{ $document->documentable_type }} </td>
                                                    <td>{{ $document->status }}</td>
                                                    <td>{{ $document->owner->first_name }} </td>
                                                    <td>{{ $document->owner->last_name }} </td>

                                                    <td class="text-right">
                                                        <a href="{{ route('batch.show', $document->document_id) }}" class="btn btn-default btn-fill small-btn"> View </a>
                                                    </td>
                                                   
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                    </div> <!-- end row -->


                    <!-- Button trigger modal -->


<!-- Modal approve-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    
      
        <div class="row">
                <div class=" col-md-8 col-md-offset-2">
                                
                        <div class="card text-center">
                             <div class="card-header">
                                   <h5> Sign Below </h5> 
                             </div>
                            <div class="card-body">
                              
                               
                                
                            </div>
                             <div class="card-footer text-muted">
                                    <button class="btn btn-default btn-fill btn-block"><a href="document-batches-view-approve-sign.html"> Submit </a></button>
                            </div>
                        </div>
                </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal approve-->

<div class="modal fade" id="ModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            
              <div class="row">
                      <div class=" col-md-8 col-md-offset-2">
                                      
                              <div class="card text-center">
                                   <div class="card-header-2">
                                         <h5> Reason</h5> 
                                   </div>
                                  <div class="card-body">
                                    
                                        <div class="col-md-12">
                                               
                                                <textarea id="textarea" rows="8" name="Address" placeholder="Enter Reason for Declining" style="margin-top: 0px; margin-bottom: 15px; width: 100%;"></textarea>
                
                                        </div>
                                      
                                  </div>
                                   <div class="card-footer text-muted">
                                          <button class="btn btn-default btn-fill btn-block">Submit</button>
                                  </div>
                              </div>
                      </div>
              </div>
          </div>
        </div>
      </div>



<!-- Modal approve end-->


            </div>
        </div>


        

    </div>
</div>

@endsection