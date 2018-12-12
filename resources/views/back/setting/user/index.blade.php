@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12">

                                <h4 class="title"> Settings </h4>
                        </div>
                        
                        
                    </div>



                    <div class="card card-inner-spacer">

                        <div class="row top-panel">

                            <div class="col-md-12">

                                
                                <h4 class="title-panel"> Roles & Priviledge</h4>

                                
                            </div>

                            
                        </div>

                    </div>
                


                    <div class="row"> 
                        
                        <div class="col-md-12">

                            <div class="card card-inner-spacer">

                                    <div class="row spacerx2">


                                            <div class="col-md-10"> 
                                                
                                                   
                    
                                            </div>
        
                                            
                                            
                                            
                                           


                                           

                                            <div class="col-md-2"> 
                                                <a class="btn tweaked-margin btn-default btn-fill small-btn btn-block " href="{{ route('setting.user.new.role') }}">Add New Roles</a>
                                        </div>
        
                                    </div>
                             
                                                                
                                <div class="content">
                                    
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th> Roles</th>
                                                    <th class="text-right"> Action </th>
                                                    
                                                   
                                                   
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($roles as $role)
                                                <tr>

                                                    <td> {{ $role->name }}  </td>
                                                    <td class="text-right">
                                                            <a class="btn tweaked-margin btn-default btn-fill small-btn" href="{{ route('setting.user.edit.roles', $role->id) }}" > Edit </a>
                                                            <a class="btn tweaked-margin btn-warning btn-fill small-btn" href="#" >Delete </a>
                                                    </td>
                                                                                                                                                
                                                </tr>
                                                @endforeach

                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
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