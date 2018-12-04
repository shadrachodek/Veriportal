@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content">
            <div class="container-fluid">

                <div class="status-check">

                    
                    <h4 class="title"> User Management </h5>

                </div>

            
                <div class="row modal-modifier doc-view">

                    <!-- Left Panel Starts here-->
                    
                    <div class="col-md-6">
                        <div class="card ">

                           

                            <div class="card-inner-spacer bottom-buffer">

                                    <h2> Bio-Data </h2>
                               <!-- ********first row******** -->
                                <div class="row border-bottom">

                                        <div class="col-md-3">
                                            <h5>First Name</h5>
                                            <h3>Oluseye</h3>

                                        </div>

                                        

                                        <div class="col-md-3">
                                            <h5>Last Name</h5>
                                            <h3>Adebola</h3>
                                        </div>

                                        <div class="col-md-6">
                                            <h5>Unique id #</h5>
                                            <h3>5247352921</h3>
                                        </div>

                                </div>
                                    <!-- ********first row******** -->

                                    <!-- ********Second row******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>City</h5>
                                                <h3>Ikeja</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>LGA/LCDA</h5>
                                                <h3>Ikeja</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Nearest Bust-Stop</h5>
                                                <h3>Ikeja</h3>
                                            </div>
                
                                                
                                    </div>

                                    <!-- ********Second row******** -->

                                                                     <!-- ********Fourthrow******** -->

                                    <!-- ********Fifthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3">
                                                <h5>Telephone</h5>
                                                <h3>08178611220</h3>
                
                                            </div>
                
                                            <div class="col-md-3">
                                                <h5>Mobile</h5>
                                                <h3>0807652435</h3>
                                            </div>
                
                                            <div class="col-md-6">
                                                <h5>Email</h5>
                                                <h3>Olurot@yhaoo.com</h3>
                                            </div>

                                    </div>

                                    <div class="row border-bottom">

                                            <div class="col-md-12">
                                                <h5>Role</h5>
                                                <h3>Super Admin</h3>
                
                                            </div>
                
                                           

                                    </div>

                                    <!-- ********Fifthrow******** -->
                                </div>
<!--*****************************************************************************************************************-->
                                <!-- Profile picture and signature starts here-->
                            <div class="doc-view-footer card-inner-spacer">

                                        <div class="col-md-2">

                                                <div class="avata">
                    
                                                <img class="img border-gray " src="assets/img/faces/face-2.jpg" alt="photo">
                    
                                                </div>
                    
                                        </div>

                                        <div class="col-md-8 col-md-offset-1 data-cap-white">

                                            <div class="signature">

                                                <img src="assets/img/signature.png" alt="owner's signature">
                                                        
                                            </div>    

                                </div> <!-- Profile picture and signature ends here-->
                            </div> 
                        </div>
                </div><!-- Left Panel ends here-->
          
                
                    
                    <div class="col-md-6"> <!-- right Panel Starts here-->
                        <div class="card card-inner-spacer">

                                    <h2> Change Password </h2>

                            <div class="row ">

                                    <div class="content">

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" placeholder="" name="username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Retype-Password</label>
                                                <input type="password" name="password" placeholder="" class="form-control">
                                            </div>
                                            
                                    </div>
                                <div class="col-md-12">
                                    <button class="btn btn-default btn-fill btn-block ">Submit</button>
                                </div>
                        </div>

                        <h2 class="spacerx2"> Account Status</h2>

                        <!--***************************************************-->

                        <div class="form-group">

                            

                                    <select name="item-required" class="selectpicker" data-title="Select Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                            <option value="id">Active</option>
                                            
                                        ...
                                    </select>
                        </div>
                        <div class="row">

                                <div class="col-md-12">
                                        <button class="btn btn-default btn-fill btn-block ">Submit</button>
                                </div>

                        </div>
                        

                                    
                    </div>

                </div><!-- right Panel endshere-->

                            
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