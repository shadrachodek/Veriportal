@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid ">

                <div class="row">
                        <div class="col-md-6">
                                <h4 class="title"> User Management </h4>
                        </div>
                        <div class="col-md-6">
                             <span class="btn-label">
                                 <a href="{{ route('user-management.create') }}" class="btn small-screens-mg btn-default btn-fill btn-wd pull-right btn-top">   <i class="fa fa-pencil"></i>   New User </a>
                            </span>
                        </div>
                </div>
                    <div class="row">
                            <div class="card card-inner-spacer card-inner-bottom-2">
                                    <div class="row spacerx2">
                                            <div class="col-md-6">
                                                    <h5 class="sub-title-2"> {{ $userCount }} - Available Users  </h5>
                                            </div>
                                            <div class="col-md-2">
                                                    <select name="warehouse" class="selectpicker" data-title="Role" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                            <option value="id">Super Admin</option>
                                                            <option value="ms">Document Manager Approval </option>
                                                        ...
                                                    </select>
                                            </div>
                                            <div class="col-md-2">
                                                    <select name="activity" class="selectpicker" data-title="Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                            <option value="id">Pending</option>
                                                            <option value="ms">Active</option>
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
                                                    <th> Username</th>
                                                    <th> First Name </th>
                                                    <th> Last Name</th>
                                                    <th> Email Address</th>
                                                    <th> Action Status</th>
                                                    <th class="td-actions text-right" style="" data-field="actions"> Action </th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td> {{ $user->username }}</td>
                                                    <td> {{ $user->first_name }} </td>
                                                    <td> {{ $user->last_name }}  </td>
                                                    <td> {{ $user->email }}  </td>
                                                    <td> Active</td>
                                                   
                                                    <td class=" text-right">
                                                            <a class="btn btn-default btn-fill small-btn " href="{{ route('user-management.show', $user) }}"> View </a>

                                                    </td>
                                                   
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                    </div> <!-- end row -->
            </div>
        </div>
</div>

@endsection