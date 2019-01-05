@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">

                            <h4 class="title">Document Lists</h4>
                    </div>
                    
                    <div class="col-md-6">
                         <span class="btn-label">
                              
                             <a class="btn  small-screens-mg btn-default btn-fill btn-wd pull-right btn-top" href="{{ route('select-owner-for-doc-reg') }}">   <i class="fa fa-pencil"></i>   New Document Registration </a>
                        </span>

                        <span class="btn-label">
                              
                                <a class="btn tweaked-margin small-screens-mg btn-default btn-fill btn-wd pull-right btn-top" href="document-transfer.html">   <i class="fa fa-pencil"></i>   New Transfer </a>
                           </span>

                    </div> 
                </div>

                    <div class="row "> 
     
                        
                        <div class="col-md-12 ">

                            <div class="card card-inner-spacer">

                                <div class="row">

                                    <div class="col-md-8">

                                        <h5 class="sub-title"> {{ $documentCount }} - Documents</h5>

                                    </div>
                                </div>



                                <div class="content">

                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Document ID</th>
                                                <th>Document Type</th>
                                                <th>Status</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="text-right">Actions</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($documents as $document)
                                            <tr>

                                                <td>{{ $document->document_id }}</td>
                                                <td>{{ $document->documentable_type }}</td>
                                                <td>{{ $document->status }}</td>
                                                <td>{{ $document->owner->first_name }}</td>
                                                <td>{{ $document->owner->last_name }}</td>
                                                <td class="text-right">
                                                    <button class="btn btn-default btn-fill small-btn"> <a href="{{ route('document.show', $document->document_id) }}"> View </a> </button>
                                                    <button class="btn btn-warning btn-fill small-btn"> <a href="#"> Delete </a> </button>
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
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search with Name or Document ID",
                    }
                });

                });
        </script>
    @endpush
@endsection