@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid ">

                <div class="row">

                    

                            <h4 class="title">Print Management</h4>
                   

                    
                </div>

                    <div class="row"> 

                            <div class="card card-inner-spacer ">
                            
                                <div class="row spacerx2">


                                    <div class="col-md-12 col-sm-12">
                                        
                                            <h5 class="sub-title-2"> {{ count($documents->keys()) }} - Available Print Job </h5>
            
                                    </div>


                        </div>



                                <div class="content">
                                    
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Job ID</th>
                                                    <th class="text-center">Number of Documents</th>
                                                    <th class="text-center">Print Status</th>
                                                    <th class="text-center">Action</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach( $documents->keys() as $document)
                                                <tr>
                                                    <td class="text-center">{{ $document }}</td>
                                                    <td class="text-center">{{ count($documents[$document]) }}</td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"> Bio Data </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row ">
            <div class="col-md-8">
                    <p>afffa</p>
            </div>

            <div class="col-md-4">
                <p>afffa</p>
            </div>
        </div>
       
      </div>
     
    </div>
  </div>
</div>


            </div>
        </div>


        

    </div>
</div>

    @endsection