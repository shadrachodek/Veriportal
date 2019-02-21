@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')


        <div class="main-content anchor-styling">
            <div class="container-fluid ">

                <div class="row ">
                            <h4 class="title">Document Batches</h4>
                </div>
                    <div class="row">
                            <div class="card card-inner-spacer ">
                                <div class="row">
                                        <div class="col-md-12">
                                                <h5 class="sub-title">{{ $batchCount }}- Available Document Batch</h5>
                                        </div>

                                </div>
                                <div class="content">
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Batch ID</th>
                                                    <th class="text-center">Number of Documents</th>
                                                    <th class="text-center">Batch Status</th>
                                                    <th class="text-center">Action</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($batches as $batch)
                                                <tr>

                                                    <td class="text-center">{{ $batch->batch_id }}</td>
                                                    <td class="text-center">{{ $batch->number_of_document }}</td>
                                                    <td class="text-center">{{ $batch->status }}</td>
                                                    <td class="text-center"> 
                                                            <a class="btn btn-default btn-fill small-btn " href="{{ route('batch.list', $batch->batch_id) }}">view</a>
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
</div>

@endsection