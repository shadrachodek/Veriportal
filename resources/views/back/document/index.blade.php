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

                        {{--<span class="btn-label">--}}
                              {{----}}
                                {{--<a class="btn tweaked-margin small-screens-mg btn-default btn-fill btn-wd pull-right btn-top" href="document-transfer.html">   <i class="fa fa-pencil"></i>   New Transfer </a>--}}
                           {{--</span>--}}

                        <span class="btn-label">
                                <a class="btn tweaked-margin small-screens-mg btn-default btn-fill btn-wd pull-right btn-top" href="{{ route('export') }}">   <i class="fa fa-pencil"></i>   Export  </a>
                           </span>

                    </div> 
                </div>

                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class="card card-inner-spacer">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="sub-title-2"> {{ $documentCount }} - Documents </h5>
                                    </div>
                                    <form method="get" action="{{ route('document.index') }}">
                                        <div class="col-md-2">
                                            <input type="text" name="document_id" placeholder="Document Id" value="{{ @$_GET['document_id'] }}" class="form-control" >
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="file_number" placeholder="File Number" value="{{ @$_GET['file_number'] }}" class="form-control" >
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="full_name" placeholder="Full Name" value="{{ @$_GET['full_name'] }}" class="form-control" >
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-default btn-fill btn-block">Submit</button>
                                        </div>
                                    </form>
                                </div>


                                <div class="content">

                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Document ID</th>
                                                <th>Document Type</th>
                                                <th>Status</th>
                                                <th>File Number</th>
                                                <th>Full Name</th>
                                                <th class="text-right">Actions</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($documents as $document)
                                            <tr>
                                                <td>{{ ($documents->currentpage()-1) * $documents->perpage() + $loop->index + 1 }}</td>
                                                <td>{{ $document->document_id}}</td>
                                                <td>{{ $document->documentable_type }}</td>
                                                <td>{{ $document->status }}</td>
                                                <td>{{ $document->documentable->file_number }}</td>
                                                <td>{{ @$document->owner->full_name }}</td>
                                                <td class="text-right">
                                                    <a class="btn btn-default btn-fill small-btn" href="{{ route('document.show', $document->document_id) }}"> View </a>
                                                </td>

                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        {{ $documents->links() }}
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
    @endpush
@endsection