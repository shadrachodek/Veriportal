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

                                <h4 class="title-panel"><a href="{{ route('setting.roles') }}">Roles & Priviledge</a> </h4>

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
                                <div id="flash-msg">
                                    @include('flash-message')
                                </div>
                           <form action="{{ route('setting.store.role.permission', $role->id) }}" method="post">
                               @csrf
                                <div class="content">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card card-inner-spacer equal-height">
                                                <h5> Document</h5>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                             <div class="checkbox">
                                                                    <input id="checkbox1" name="permissions[]" value="view documents" type="checkbox"  {{ @$permissions[1] ? 'checked' : '' }}>
                                                                        <label for="checkbox1">
                                                                       View
                                                                    </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" id="checkbox2" value="create documents" type="checkbox" {{ @$permissions[2] ? 'checked' : '' }}>
                                                                        <label for="checkbox2">
                                                                            Create
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="permissions[]" value="edit documents" id="checkbox3" type="checkbox" {{ @$permissions[3] ? 'checked' : '' }}>
                                                                                <label for="checkbox3">
                                                                                    Edit
                                                                        </label>
                                                                    </div>
        
                                                        </div>

                                                        

                                                </div>

                                                <div class="row">

                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="permissions[]" id="checkbox4" value="delete documents" type="checkbox" {{ @$permissions[4] ? 'checked' : '' }}>
                                                                        <label for="checkbox4">
                                                                            Delete
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="permissions[]" id="checkbox5" value="approve documents" type="checkbox" {{ @$permissions[5] ? 'checked' : '' }}>
                                                                        <label for="checkbox5">
                                                                            Approve
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="permissions[]" value="super documents" id="checkbox6" type="checkbox" {{ @$permissions[6] ? 'checked' : '' }}>
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
                                                                    <input name="permissions[]" value="view owners" id="checkbox8" type="checkbox" {{ @$permissions[7] ? 'checked' : '' }}>
                                                                        <label for="checkbox8">
                                                                        View
                                                                    </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="create owners" id="checkbox9" type="checkbox" {{ @$permissions[8] ? 'checked' : '' }}>
                                                                        <label for="checkbox9">
                                                                            Create
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                                <div class="checkbox">
                                                                        <input name="permissions[]" value="edit owners" id="checkbox10" type="checkbox" {{ @$permissions[9] ? 'checked' : '' }}>
                                                                                <label for="checkbox10">
                                                                                    Update
                                                                        </label>
                                                                    </div>
        
                                                        </div>

                                                        

                                                </div>

                                                <div class="row">

                                                        <div class="col-md-12">
                                                                <div class="checkbox">
                                                                        <input name="permissions[]" value="delete owners" id="checkbox11" type="checkbox" {{ @$permissions[10] ? 'checked' : '' }}>
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
                                                                    <input name="permissions[]" value="view prints" id="checkbox12" type="checkbox" {{ @$permissions[11] ? 'checked' : '' }}>
                                                                        <label for="checkbox12">
                                                                        View
                                                                    </label>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="checkbox">
                                                                <input name="permissions[]" value="delete prints" id="checkbox13" type="checkbox" {{ @$permissions[12] ? 'checked' : '' }}>
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
                                                                        <input name="permissions[]" value="view stocks" id="checkbox14" type="checkbox" {{ @$permissions[13] ? 'checked' : '' }}>
                                                                            <label for="checkbox14">
                                                                            View Items
                                                                        </label>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <input name="permissions[]" value="receive stocks" id="checkbox15" type="checkbox" {{ @$permissions[14] ? 'checked' : '' }}>
                                                                            <label for="checkbox15">
                                                                                Receive Items
                                                                    </label>
                                                                </div>


                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="edit stocks" id="checkbox16" type="checkbox" {{ @$permissions[15] ? 'checked' : '' }}>
                                                                                    <label for="checkbox16">
                                                                                        Edit Items
                                                                            </label>
                                                                        </div>

                                                            </div>



                                                    </div>

                                                    <div class="row">

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="delete stocks" id="checkbox17" type="checkbox" {{ @$permissions[16] ? 'checked' : '' }}>
                                                                            <label for="checkbox17">
                                                                                Delete Items
                                                                            </label>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="approve stocks" id="checkbox18" type="checkbox" {{ @$permissions[17] ? 'checked' : '' }}>
                                                                            <label for="checkbox18">
                                                                                Approve Request
                                                                            </label>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="transfer stocks" id="checkbox19" type="checkbox" {{ @$permissions[18] ? 'checked' : '' }}>
                                                                            <label for="checkbox19">
                                                                               Transfer Items
                                                                            </label>
                                                                    </div>

                                                            </div>



                                                    </div>

                                                    <div class="row">

                                                            <div class="col-md-12">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="raise stocks" id="checkbox20" type="checkbox" {{ @$permissions[19] ? 'checked' : '' }}>
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
                                                                        <input name="permissions[]" value="view users" id="checkbox21" type="checkbox" {{ @$permissions[24] ? 'checked' : '' }}>
                                                                            <label for="checkbox21">
                                                                           View User
                                                                        </label>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <input name="permissions[]" value="create users" id="checkbox22" type="checkbox" {{ @$permissions[25] ? 'checked' : '' }}>
                                                                            <label for="checkbox22">
                                                                                Create User
                                                                    </label>
                                                                </div>


                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="create roles" id="checkbox23" type="checkbox" {{ @$permissions[30] ? 'checked' : '' }}>
                                                                                    <label for="checkbox23">
                                                                                        Create Role
                                                                            </label>
                                                                        </div>

                                                            </div>

                                                    </div>

                                                    <div class="row">

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="delete users" id="checkbox24" type="checkbox" {{ @$permissions[27] ? 'checked' : '' }}>
                                                                            <label for="checkbox24">
                                                                                Delete User
                                                                            </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="update users" id="checkbox25" type="checkbox" {{ @$permissions[28] ? 'checked' : '' }}>
                                                                            <label for="checkbox25">
                                                                               Update User
                                                                            </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                            <input name="permissions[]" value="view roles" id="checkbox26" type="checkbox" {{ @$permissions[29] ? 'checked' : '' }}>
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
                                                                        <input name="permissions[]" value="view reports" id="checkbox27" type="checkbox" {{ @$permissions[20] ? 'checked' : '' }}>
                                                                            <label for="checkbox27">
                                                                            View Reports
                                                                        </label>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <input name="permissions[]" value="query reports" id="checkbox28" type="checkbox" {{ @$permissions[21] ? 'checked' : '' }}>
                                                                            <label for="checkbox28">
                                                                                Query Reports
                                                                    </label>
                                                                </div>


                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="checkbox">
                                                                        <input name="permissions[]" value="export reports" id="checkbox29" type="checkbox" {{ @$permissions[22] ? 'checked' : '' }}>
                                                                                <label for="checkbox29">
                                                                                    Exports Reports
                                                                        </label>
                                                                    </div>


                                                            </div>

                                                    </div>

                                                    <div class="row">

                                                            <div class="col-md-4">

                                                                 <div class="checkbox">
                                                                        <input name="permissions[]" value="delete reports" id="checkbox30" type="checkbox" {{ @$permissions[23] ? 'checked' : '' }}>
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