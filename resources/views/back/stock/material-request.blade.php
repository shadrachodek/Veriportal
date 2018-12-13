@extends('layouts.back-pages')
@section('content')
@include('layouts.partial.sidebar')

<div class="main-panel">

    @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid ">

                <div class="row ">

                   

                            <h4 class="title">Stock Management</h4>
                    
                    
                    
                </div>

                    <div class="row"> 

                            <div class="card card-inner-spacer card-inner-bottom-2">
                            
                                    <div class="row spacerx2">


                                            <div class="col-md-2"> 
                                                
                                                    <h5 class="sub-title-2"> Material Request </h5>
                    
                                            </div>
        
                                            
                                            <div class="col-md-2"> 
                                                
                                                <div class="form-group">
                                                        <input type="text" class="form-control datepicker datepicker1"  placeholder="From Date"/>
                                                </div>  
                    
                                            </div>
        
                                            <div class="col-md-2"> 
        
                                                <div class="form-group">
                                                    <input type="text" class="form-control datepicker datepicker1"  placeholder="To Date"/>
                                                </div>
        
                                            </div>
                                            
                                            <div class="col-md-2">
                                                
                                                    <select name="warehouse" class="selectpicker" data-title="Warehouse" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                            <option value="id">Pending</option>
                                                            <option value="ms">Printed</option>
                                                        ...
                                                    </select>
                                            
                                            </div>

                                            <div class="col-md-2">
                                                
                                                    <select name="activity" class="selectpicker" data-title="Activity" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
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
                                                    <th>Date</th>
                                                    <th>Request ID</th>
                                                    <th>Item Name</th>
                                                    <th>Quantity Request</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                <tr>

                                                    <td>10 JUNE 2018 </td>
                                                    <td>51783748</td>
                                                    <td> COFO PVC MATT  </td>
                                                    <td> 125</td>
                                                    <td> Pending</td>
                                                    <td class="text-right">
                                                            <a class="btn btn-default btn-fill small-btn " href="#ModalCenter-1" data-toggle="modal" data-target="#ModalCenter-1">View </a> 
                                                            <a class="btn btn-warning btn-fill small-btn " href="#">      Delete </a>
                                                    </td>
                                                   
                                                </tr>

                                                <tr>
                                                    
                                                        <td>10 JUNE 2018 </td>
                                                        <td>51783748</td>
                                                        <td> COFO PVC MATT  </td>
                                                        <td> 125</td>
                                                        <td> Pending</td>
                                                        <td class="text-right">
                                                                <a class="btn btn-default btn-fill small-btn " href="#ModalCenter-1" data-toggle="modal" data-target="#ModalCenter-1">View </a> 
                                                                <a class="btn btn-warning btn-fill small-btn " href="#">      Delete </a>
                                                        </td>
                                                    
                                                </tr>
                                               

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                    </div> <!-- end row -->


                   
<!-- Modal New Item-->

<div class="modal fade" id="ModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            
              <div class="row">
                      <div class=" col-md-8 col-md-offset-2">
                                      
                              <div class="card st-modal-control">
                                   <div class="stock-pop-header">
                                         <h4> New Item</h4> 
                                   </div>
                                  <div class="card-body">
                                    
                                        <div class="col-md-12">
                                               
                                                <div class="form-group">
                                                        <label>Item Name</label>
                                                        <input type="email" name="item-name"  class="form-control">
                                                </div>

                                                <div class="form-group">
                                                        <label>Production Opening Quantity</label>
                                                        <input type="email" name="production-opening-quantity"  class="form-control">
                                                </div>

                                                <div class="form-group">
                                                        <label>Storage Opening Quantity</label>
                                                        <input type="email" name="storage-opening-quantity"  class="form-control">
                                                </div>
                                                
                
                                        </div>
                                      
                                  </div>

                                    <div class="row">

                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="text-center">
                                                <button class="btn btn-default btn-fill small-btn btn-block">Update</button>
                           

             </div>
                                        </div>
                                        
                                     </div>


                              </div>
                      </div>
           </div>
        </div>
      </div>

<!-- Modal New Item end-->    



 <!-- Button trigger modal -->


<!-- Modal Receive-->
<div class="modal fade" id="ModalCenter-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            
              <div class="row">
                      <div class=" col-md-8 col-md-offset-2">
                                      
                              <div class="card st-modal-control">
                                   <div class="stock-pop-header">
                                         <h4> Material Request Approval </h4> 
                                   </div>
                                  <div class="card-body">
                                    
                                        <div class="col-md-12">
                                               
                                                <div class="form-group">
                                                    <label>Select Item Required </label>
                                                        <select name="item-required" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                                <option value="id">200</option>
                                                                <option value="ms">500</option>
                                                                <option value="ms">1000</option>
                                                            ...
                                                        </select>

                                                        <div class="row sub-info">
                                                       
                                                                <div class="col-md-6">
            
                                                                    <p> Quantity Currently Available </p>
                                                                    
                                                                </div>
            
                                                                <div class="col-md-6">

                                                                        <p> 200 </p>
                                                                </div>
            
                                                        </div>

                                                </div>


                                                <div class="form-group">

                                                        <label>Quantity to Required </label>
                                                        <input type="email"  class="form-control">
                                                        
                                                </div>

                                                

                                                <div class="form-group">
                                                        <label> Approval Status </label>
                                                            <select name="item-required" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                                    <option value="id">Pending</option>
                                                                    
                                                               
                                                            </select>
        
                                                    </div>

                
                                        </div>
                                      
                                  </div>

                                    <div class="row">

                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="text-center">
                                                <button class="btn top-buffer btn-default btn-fill small-btn btn-block">Update</button>
                           

             </div>
                                        </div>
                                        
                                     </div>


                              </div>
                      </div>
              </div>
          </div>
        </div>
      </div>
      
<!-- Modal Receive stock ends here-->

            </div>
        </div>


        

    </div>
</div>

@endsection