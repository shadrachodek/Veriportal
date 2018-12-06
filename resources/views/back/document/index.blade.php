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
                             
                                    <h5 class="sub-title">{{ $documentCount }} - Documents</h5>


                                <div class="content">
                                    
                                    <div class="fresh-datatables">
                                        {!! $dataTable->table(["style"=>"width:100%"], true) !!}
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
        {!! $dataTable->scripts() !!}
    @endpush
@endsection