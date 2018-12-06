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


                                    <div class="col-md-15 col-sm-3"> 
                                        
                                            <h5 class="sub-title-2"> 129 - Available Print Job </h5>
            
                                    </div>

                                    
                                    <div class="col-md-15 col-sm-3"> 
                                        
                                        <div class="form-group">
                                            <input type="text" value="" name="document-id" placeholder="Job ID #" class="form-control" />
                                        </div>  
            
                                    </div>

                                    <div class="col-md-15 col-sm-3"> 

                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker" placeholder="Date Picker Here"/>
                                        </div>

                                    </div>
                                    
                                    <div class=col-md-15 col-sm-3">
                                        
                                            <select name="status" class="selectpicker" data-title="Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                    <option value="id">Pending</option>
                                                    <option value="ms">Printed</option>
                                                ...
                                            </select>
                                    
                                    </div>
                                    <div class="col-md-2"> 
                                        
                                            <button class="btn btn-default btn-fill btn-block">Submit</button>
                                    
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
                                                <tr>

                                                    <td class="text-center">56382637</td>
                                                    <td class="text-center">125</td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="print-job-view.html">      view </a>
                                                    </td>
                                                 
                                                   
                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="#">      view </a> 
                                                        </td>
                                                    
                                                </tr>
                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                        
                                                    </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center">
                                                             <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>

                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                        
                                                    </tr>

                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"> <a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                </tr>


                                                <tr>
                                                    
                                                        <td class="text-center">56382637</td>
                                                        <td class="text-center">125</td>
                                                        <td class="text-center">Pending</td>
                                                        <td class="text-center"><a class="btn btn-default btn-fill small-btn " href="#">      view </a>
                                                        </td>
                                                        
                                                </tr>

                                                
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