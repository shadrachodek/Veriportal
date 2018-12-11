@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')
        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-6">

                                <h4 class="title">Stock Management -Item View</h4>
                        </div>

                        <div class="col-md-6 text-right">
                            <p>STATUS</p>
                            <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                            <div class="bootstrap-switch-container pull-right" style="width: 122px;">
                                <span class="bootstrap-switch-handle-on bootstrap-switch-info" style="width: 50px;"></span>
                                <span class="bootstrap-switch-label" style="width: 30px;">&nbsp;</span>
                                <span class="bootstrap-switch-handle-off bootstrap-switch-info" style="width: 100px;"></span>
                                <input type="checkbox" checked="Disabled" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="Active" data-off-text="Disabled">
                            </div>
                        </div>
                        
                        
                    </div>



                    <div class="print-view-style">

                        <div class="col-md-5 card">

                            <div class="row bottom-buffer">

                                <div class="col-md-6 col-sm-12">

                                        <div class="left-side-print">

                                                <p> ItemId</p>
                                                <h5 class=""> {{ $stock->stock_id }} </h5>
                            
                                        </div>
                                </div>

                                <div class="col-md-6 col-sm-12">

                                        <div class="right-side-print">

                                                <p> Date Created</p>
                                                <h5 class=""> {{ $stock->created_at }}</h5>
                            
                                        </div>

                                </div>

                            </div>

                            <div class="row">

                                    <div class="col-md-6 col-sm-12">

                                            <div class="">
                                                    <p>Item NAme</p>
                                                    <h5 class=""> {{ $stock->name }} </h5>
                                            </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                            <div class="right-side-print">
                                                    <p> DAte Last Updated</p>
                                                    <h5 class=""> {{ $stock->updated_at }} </h5>
                                            </div>
                                    </div>

                            </div>
                        </div>

                        <div class="col-md-5 col-md-offset-2 card">

                            <div class="row bottom-buffer">
                                    <div class="col-md-6 col-sm-12">

                                            <div class="left-side-print">

                                                    <p> Warehouse Type</p>
                                                    <h5 class="">Production</h5>
                                
                                            </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                            <div class="right-side-print">

                                                    <p>Warehouse Type</p>
                                                    <h5 class=""> Storage</h5>
                                
                                            </div>

                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                            <div class="left-side-print">
                                                    <p> Available Quantity</p>
                                                    <h5 class=""> {{ $stock->warehouse->production }} </h5>
                                            </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                            <div class="right-side-print">
                                                    <p> Available Quantity</p>
                                                    <h5 class=""> {{ $stock->warehouse->storage }}  </h5>
                                            </div>
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                            <div class="left-side-print">
                                                    <button class="btn top-buffer tweaked-margin btn-success btn-fill small-btn "><a href="#ModalCenter-1" data-toggle="modal" data-target="#ModalCenter-1">Receive Stock </a></button>
                                                    
                                            </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                            <div class="right-side-print">
                                                    <button class="btn top-buffer btn-warning btn-fill small-btn "><a href="#ModalCenter-2" data-toggle="modal" data-target="#ModalCenter-2">Transfer Stock</a></button>
                                            </div>
                                    </div>
                            </div>



                        </div>

                    </div>



                    <div class="row "> 
                        
                        <div class="col-md-12 ">

                            <div class="card card-inner-spacer">

                                    <div class="row spacerx2">


                                            <div class="col-md-2"> 
                                                
                                                    <h5 class="sub-title-2"> Item History </h5>
                    
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
                                                    <th> Date </th>
                                                    <th> User</th>
                                                    <th> Activity </th>
                                                    <th> Warehouse Type </th>
                                                    <th> Quantity</th>
                                                   
                                                  
                                                    
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                <tr>

                                                    <td>10 June 2018</td>
                                                    <td>Akinade</td>
                                                    <td>Stock Update  </td>
                                                    <td>Production</td>
                                                    <td>120</td>
                                                   
                                                   
                                                   
                                                </tr>

                                                <tr>
                                                    
                                                     <td>10 June 2018</td>
                                                     <td>Funmi</td>
                                                    <td>Stock Update </td>
                                                    <td> Storage</td>
                                                    <td>120</td>
                                                   
                                                                                                        
                                                </tr>
                                                <tr>
                                                    
                                                     <td>10 June 2018</td>
                                                     <td>Akin</td>
                                                    <td>Stock Update  </td>
                                                    <td> Storage </td>
                                                    <td>120</td>
                                                   
                                                                                                           
                                                    </tr>
                                                                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->


                    <!-- Button trigger modal -->


<!-- Modal Receive Stock -->

<div class="modal fade" id="ModalCenter-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            
              <div class="row">
                      <div class=" col-md-8 col-md-offset-2">
                                      
                              <div class="card st-modal-control">
                                   <div class="stock-pop-header">
                                         <h4> Receive Stock</h4> 
                                   </div>
                                  <div class="card-body">
                                    
                                        <div class="col-md-12">


                                            <div class="stock-pop-info">
                                                    <p> Item Name</p>
                                                    <h5 class=""> COFO PVC MATT </h5>
                                            </div>

                                                <div class="form-group">

                                                        <label>Quantity to Receive</label>
                                                        <input type="email" name="item-name"  class="form-control">
                                                </div>

                                        </div>
                                      
                                  </div>

                                    <div class="row">

                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="text-center">
                                                <button class="btn btn-default btn-fill small-btn btn-block">Submit</button>
                           

             </div>
                                        </div>
                                        
                                     </div>


                              </div>
                      </div>
           </div>
        </div>
      </div>

<!-- Modal Receive Stock end-->    


<!-- Modal Transfer Stock-->
<div class="modal fade" id="ModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      
        
          <div class="row">
                  <div class=" col-md-8 col-md-offset-2">
                                  
                          <div class="card st-modal-control">
                               <div class="stock-pop-header">
                                     <h4> Receive Stock</h4> 
                               </div>
                              <div class="card-body">
                                
                                    <div class="col-md-12">

                                            <div class="stock-pop-info">
                                                    <p> Item Name</p>
                                                    <h5 class=""> COFO PVC MATT</h5>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label>Select Warehouse to Transfer from </label>
                                                    <select name="item-required" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                            <option value="id">200</option>
                                                            <option value="ms">500</option>
                                                            <option value="ms">1000</option>
                                                        ...
                                                    </select>

                                                    <div class="row sub-info">
                                                   
                                                            <div class="col-md-6">
        
                                                                <p>Current Available Quantity </p>
                                                                
                                                            </div>
        
                                                            <div class="col-md-6">

                                                                    <p> 200 </p>
                                                            </div>
        
                                                    </div>

                                            </div>

                                            

                                            <div class="form-group">

                                                    <label>Quantity to Transfer</label>
                                                    <input type="email"  class="form-control">

                                                    
                                                    
                                            </div>


                                            <div class="form-group">
                                                    <label>Select Warehouse Type to Transfer to </label>
                                                        <select name="item-required" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                                <option value="id">200</option>
                                                                <option value="ms">500</option>
                                                                <option value="ms">1000</option>
                                                            ...
                                                        </select>
    
                                                        <div class="row sub-info">
                                                       
                                                                <div class="col-md-6">
            
                                                                    <p>  Current Available Quantity </p>
                                                                    
                                                                </div>
            
                                                                <div class="col-md-6">
    
                                                                        <p> Quantity Available After Transfer 200 </p>
                                                                </div>
            
                                                        </div>
    
                                                </div>
    

            
                                    </div>
                                  
                              </div>

                                <div class="row">

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="text-center">
                                            <button class="btn btn-default btn-fill small-btn btn-block">Submit</button>
                       

         </div>
                                    </div>
                                    
                                 </div>


                          </div>
                  </div>
          </div>
      </div>
    </div>
  </div>
  
<!-- Modal Transfer stock ends here-->


            </div>
        </div>


        

    </div>
</div>

@endsection