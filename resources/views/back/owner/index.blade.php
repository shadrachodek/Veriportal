@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">

                            <h4 class="title">Document Owners</h4>

                    </div>
                    
                    <div class="col-md-6">
                         <span class="btn-label">
                              
                             <a class="btn small-screens-mg btn-default btn-fill btn-wd pull-right btn-top" href="{{ route('owner.create') }}">   <i class="fa fa-pencil"></i>   New Registration </a>
                        </span>

                    </div> 
                </div>

                    <div class="row"> 

                        
                        <div class="col-md-12">

                            <div class="card card-inner-spacer">
                             
                                    <h5 class="sub-title">{{ $ownerCount }} Document Owners</h5>




                                <div class="content">

                                    <div class="fresh-datatables">
                                        <table id="datatables" class="order-column table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Owner Id</th>
                                                <th>Date of Birth</th>
                                                <th>Occupation</th>
                                                <th>Marital Status</th>
                                                <th class="text-right">Actions</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($owners as $owner)
                                                <tr>
                                                    <td>{{ $owner->full_name  }}</td>
                                                    <td>{{ $owner->owner_id }}</td>
                                                    <td>{{ $owner->date_of_birth }}</td>
                                                    <td>{{ $owner->occupation }}</td>
                                                    <td>{{ $owner->marital_status }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-default btn-fill small-btn"> <a href="{{ route('owner.show', $owner->owner_id) }}"> View </a> </button>
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

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatables').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "autoWidth": false,
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search...",
                    }
                });

            });
        </script>
    @endpush

@endsection