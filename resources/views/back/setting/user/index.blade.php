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

                                
                                <h4 class="title-panel"><a href="{{ route('setting.roles') }}">Roles & Priviledge</a> </h4>

                                
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
                                                <a class="btn tweaked-margin btn-default btn-fill small-btn btn-block " href="{{ route('setting.new.role-permissions') }}">Add New Roles</a>
                                        </div>
                                    </div>
                             
                                                                
                                <div class="content">
                                    <div id="flash-msg">
                                        @include('flash-message')
                                    </div>
                                    
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
                                                            <a class="btn tweaked-margin btn-default btn-fill small-btn" href="{{ route('setting.role.view.update', $role->id) }}" > Edit </a>
                                                            <a class="btn tweaked-margin btn-warning btn-fill small-btn" href="{{ route('setting.delete.role.permission', $role->id) }}" >Delete </a>
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
                </div>
        </div>
    </div>
</div>

@endsection