@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling settings-styling">
            <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12">

                                <h4 class="title"> Settings </h4>
                        </div>
                        
                        
                    </div>



                    <div class="card card-inner-spacer">

                        <div class="row top-panel">
                            <form action="{{ route('setting.create.role.permission') }}" method="post">

                            <div class="col-md-12">

                                <h4 class="panel-header"> New Role </h4>

                                <div class="row">

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label> Name</label>
                                                <input type="text" name="role"  class="form-control">

                                            </div>

                                        </div>




                                </div>
                                
                            </div>

                            
                        </div>

                    </div>
                


                    <div class="row"> 
                        
                        <div class="col-md-12">

                            <div class="">


                                    @csrf
                                    <div class="content">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card card-inner-spacer equal-height">
                                                    <h5> Document</h5>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input id="checkbox1" name="permissions[]" value="view documents" type="checkbox" >
                                                                <label for="checkbox1">
                                                                    View
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" id="checkbox2" value="create documents" type="checkbox">
                                                                <label for="checkbox2">
                                                                    Create
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="edit documents" id="checkbox3" type="checkbox">
                                                                <label for="checkbox3">
                                                                    Edit
                                                                </label>
                                                            </div>

                                                        </div>



                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" id="checkbox4" value="delete documents" type="checkbox" >
                                                                <label for="checkbox4">
                                                                    Delete
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" id="checkbox5" value="approve documents" type="checkbox" >
                                                                <label for="checkbox5">
                                                                    Approve
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="super documents" id="checkbox6" type="checkbox" >
                                                                <label for="checkbox6">
                                                                    Super Approve
                                                                </label>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ">
                                                <div class="card card-inner-spacer equal-height">
                                                    <h5> Owner </h5>

                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="view owners" id="checkbox8" type="checkbox" >
                                                                <label for="checkbox8">
                                                                    View
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="create owners" id="checkbox9" type="checkbox" >
                                                                <label for="checkbox9">
                                                                    Create
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="edit owners" id="checkbox10" type="checkbox" >
                                                                <label for="checkbox10">
                                                                    Update
                                                                </label>
                                                            </div>

                                                        </div>



                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="delete owners" id="checkbox11" type="checkbox" >
                                                                <label for="checkbox11">
                                                                    Delete
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card card-inner-spacer equal-height" >
                                                    <h5> Print Management </h5>
                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="view prints" id="checkbox12" type="checkbox" >
                                                                <label for="checkbox12">
                                                                    View
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="delete prints" id="checkbox13" type="checkbox" >
                                                                <label for="checkbox13">
                                                                    Delete
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Second Row starts Here -->

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="card card-inner-spacer equal-height">
                                                    <h5> Stock</h5>

                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="view stocks" id="checkbox14" type="checkbox" >
                                                                <label for="checkbox14">
                                                                    View Items
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="receive stocks" id="checkbox15" type="checkbox" >
                                                                <label for="checkbox15">
                                                                    Receive Items
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="edit stocks" id="checkbox16" type="checkbox" >
                                                                <label for="checkbox16">
                                                                    Edit Items
                                                                </label>
                                                            </div>

                                                        </div>



                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="delete stocks" id="checkbox17" type="checkbox" >
                                                                <label for="checkbox17">
                                                                    Delete Items
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="approve stocks" id="checkbox18" type="checkbox" >
                                                                <label for="checkbox18">
                                                                    Approve Request
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="transfer stocks" id="checkbox19" type="checkbox" >
                                                                <label for="checkbox19">
                                                                    Transfer Items
                                                                </label>
                                                            </div>

                                                        </div>



                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="raise stocks" id="checkbox20" type="checkbox" >
                                                                <label for="checkbox20">
                                                                    Raise Requests
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ">
                                                <div class="card card-inner-spacer equal-height">
                                                    <h5> User Management</h5>

                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="view users" id="checkbox21" type="checkbox" >
                                                                <label for="checkbox21">
                                                                    View User
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="create users" id="checkbox22" type="checkbox" >
                                                                <label for="checkbox22">
                                                                    Create User
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="create roles" id="checkbox23" type="checkbox" >
                                                                <label for="checkbox23">
                                                                    Create Role
                                                                </label>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="delete users" id="checkbox24" type="checkbox" >
                                                                <label for="checkbox24">
                                                                    Delete User
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="update users" id="checkbox25" type="checkbox" >
                                                                <label for="checkbox25">
                                                                    Update User
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="view roles" id="checkbox26" type="checkbox" >
                                                                <label for="checkbox26">
                                                                    View Roles
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card card-inner-spacer equal-height">
                                                    <h5> Report Management </h5>
                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="view reports" id="checkbox27" type="checkbox" >
                                                                <label for="checkbox27">
                                                                    View Reports
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="query reports" id="checkbox28" type="checkbox" >
                                                                <label for="checkbox28">
                                                                    Query Reports
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="export reports" id="checkbox29" type="checkbox" >
                                                                <label for="checkbox29">
                                                                    Exports Reports
                                                                </label>
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="delete reports" id="checkbox30" type="checkbox" >
                                                                <label for="checkbox30">
                                                                    Delete Reports
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn  btn-warning btn-fill btn-block"> Create Role </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->


                    <!-- Button trigger modal -->


<!-- Modal Receive Stock -->

<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            
              <div class="row">
                      <div class=" col-md-8 col-md-offset-2">
                                      
                              <div class="card st-modal-control">
                                   <div class="stock-pop-header">
                                         <h4> New Payment Type</h4> 
                                   </div>
                                  <div class="card-body">
                                    
                                        <div class="col-md-12">


                                                <div class="form-group">

                                                        <label> Name </label>
                                                        <input type="email" name="lga-name"  class="form-control">
                                                </div>

                                                <div class="form-group">

                                                        <label> Type </label>
                                                        <input type="email" name="lga-code"  class="form-control">
                                                </div>

                                        </div>
                                      
                                  </div>

                                    <div class="row">

                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="text-center">
                                                <button class="btn btn-default top-buffer btn-fill small-btn btn-block">Save</button>
                           

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
                                                    <p> Item Id</p>
                                                    <h5 class=""> 56188762</h5>
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
        
                                                                <p> Quantity Currently Available </p>
                                                                
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
            
                                                                    <p> Quantity Currently Available </p>
                                                                    
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
                                            <button class="btn btn-default btn-fill small-btn btn-block">Update</button>
                       

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