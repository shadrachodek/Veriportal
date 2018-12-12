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

                            <div class="col-md-12">

                                <h4 class="panel-header"> Roles & Priviledge </h4>

                                <div class="row">

                                        <div class="col-md-12">

                                                <p> Name</p>
                                                <h2>{{ title_case($role->name) }}</h2>

                                          

                                        </div>

                                      




                                </div>
                                
                            </div>

                            
                        </div>

                    </div>
                


                    <div class="row"> 
                        
                        <div class="col-md-12">

                            <div class="">
                           <form action="{{ route('setting.user.store.role', $role->id) }}" method="post">
                               @csrf
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card card-inner-spacer equal-height">
                                                <h5> Document</h5>
                                                <div class="row">
                                                        <div class="col-md-4">
                                                             <div class="checkbox">
                                                                    <input id="checkbox1" name="document[]" value="create document" type="checkbox" {{}}>
                                                                        <label for="checkbox1">
                                                                        Create
                                                                    </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="document[]" id="checkbox2" value="delete document" type="checkbox">
                                                                        <label for="checkbox2">
                                                                            Delete
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="document[]" value="update document" id="checkbox3" type="checkbox" checked="">
                                                                                <label for="checkbox3">
                                                                                    Update
                                                                        </label>
                                                                    </div>
        
                                                        </div>

                                                        

                                                </div>

                                                <div class="row">

                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="document[]" id="checkbox4" type="checkbox" checked="">
                                                                        <label for="checkbox4">
                                                                            View
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="document[]" id="checkbox5" value="approve document" type="checkbox" checked="">
                                                                        <label for="checkbox5">
                                                                            Approve
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="document[]" value="super approve" id="checkbox6" type="checkbox" checked="">
                                                                        <label for="checkbox6">
                                                                           Super Approve
                                                                        </label>
                                                                </div>

                                                        </div>
                                                        
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-12">
                                                                <div class="checkbox">
                                                                        <input id="checkbox7" type="checkbox" checked="">
                                                                        <label for="checkbox7">
                                                                            Decline
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
                                                                    <input id="checkbox8" type="checkbox" checked="">
                                                                        <label for="checkbox8">
                                                                        Create
                                                                    </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input id="checkbox9" type="checkbox" checked="">
                                                                        <label for="checkbox9">
                                                                            Delete
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input id="checkbox10" type="checkbox" checked="">
                                                                                <label for="checkbox10">
                                                                                    Update
                                                                        </label>
                                                                    </div>
        
                                                        </div>

                                                        

                                                </div>

                                                <div class="row">

                                                        <div class="col-md-12">
                                                                <div class="checkbox">
                                                                        <input id="checkbox11" type="checkbox" checked="">
                                                                        <label for="checkbox11">
                                                                            View
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
                                                                    <input id="checkbox12" type="checkbox" checked="">
                                                                        <label for="checkbox12">
                                                                        View
                                                                    </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input id="checkbox13" type="checkbox" checked="">
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
                                                                        <input id="checkbox14" type="checkbox" checked="">
                                                                            <label for="checkbox14">
                                                                            View Items
                                                                        </label>
                                                                </div>
    
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <input id="checkbox15" type="checkbox" checked="">
                                                                            <label for="checkbox15">
                                                                                Edit Items
                                                                    </label>
                                                                </div>
    
    
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox16" type="checkbox" checked="">
                                                                                    <label for="checkbox16">
                                                                                       Delete Items
                                                                            </label>
                                                                        </div>
            
                                                            </div>
    
                                                            
    
                                                    </div>
    
                                                    <div class="row">
    
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox17" type="checkbox" checked="">
                                                                            <label for="checkbox17">
                                                                                Receive Items
                                                                            </label>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox18" type="checkbox" checked="">
                                                                            <label for="checkbox17">
                                                                                Transfer Items
                                                                            </label>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox19" type="checkbox" checked="">
                                                                            <label for="checkbox19">
                                                                               Raise Requests
                                                                            </label>
                                                                    </div>
    
                                                            </div>
                                                            
    
    
                                                    </div>

                                                    <div class="row">
    
                                                            <div class="col-md-12">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox20" type="checkbox" checked="">
                                                                            <label for="checkbox20">
                                                                                Approve Request
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
                                                                        <input id="checkbox21" type="checkbox" checked="">
                                                                            <label for="checkbox21">
                                                                           Create User
                                                                        </label>
                                                                </div>
    
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <input id="checkbox22" type="checkbox" checked="">
                                                                            <label for="checkbox22">
                                                                                Delete User
                                                                    </label>
                                                                </div>
    
    
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox23" type="checkbox" checked="">
                                                                                    <label for="checkbox23">
                                                                                        Update User
                                                                            </label>
                                                                        </div>
            
                                                            </div>
    
                                                    </div>
    
                                                    <div class="row">
    
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox24" type="checkbox" checked="">
                                                                            <label for="checkbox24">
                                                                                View User
                                                                            </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox24" type="checkbox" checked="">
                                                                            <label for="checkbox24">
                                                                                View Roles
                                                                            </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input id="checkbox24" type="checkbox" checked="">
                                                                            <label for="checkbox24">
                                                                                Create Roles
                                                                            </label>
                                                                    </div>
                                                            </div>
                                                           
                                                    </div>
    
                                                    
                                                     </div>
                                            </div>
    
                                            <div class="col-md-4">
                                               <div class="card card-inner-spacer equal-height">
                                                     <h5> Print Management </h5>
                                                    <div class="row">
    
                                                            <div class="col-md-4">
    
                                                                 <div class="checkbox">
                                                                        <input id="checkbox12" type="checkbox" checked="">
                                                                            <label for="checkbox12">
                                                                            View Reports
                                                                        </label>
                                                                </div>
    
                                                            </div>
    
                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <input id="checkbox13" type="checkbox" checked="">
                                                                            <label for="checkbox13">
                                                                                Query Reports
                                                                    </label>
                                                                </div>
    
    
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                        <input id="checkbox13" type="checkbox" checked="">
                                                                                <label for="checkbox13">
                                                                                    Exports Reports
                                                                        </label>
                                                                    </div>
        
        
                                                            </div>
         
                                                    </div>

                                                    <div class="row">
    
                                                            <div class="col-md-4">
    
                                                                 <div class="checkbox">
                                                                        <input id="checkbox12" type="checkbox" checked="">
                                                                            <label for="checkbox12">
                                                                            View Settings
                                                                        </label>
                                                                </div>
    
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="checkbox">
                                                                    <input id="checkbox13" type="checkbox" checked="">
                                                                            <label for="checkbox13">
                                                                                Edit Settings
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
                                                    <button type="submit" class="btn  btn-warning btn-fill btn-block"> Update </button>
                                                </div>
                                        </div>
                                </div>

                           </form>
                                <!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->


                    <!-- Button trigger modal -->



  
<!-- Modal Transfer stock ends here-->


            </div>
        </div>


        

    </div>
</div>
@endsection