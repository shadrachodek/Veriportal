@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid ">

                <div class="row">
                            <h4 class="title">Reports</h4>
                </div>
                    <div class="row">
                            <div class="card card-inner-spacer boxes">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                            <div class="center-screen">
                                                <ul>
                                                    {{--<li> <a href="reports-document-reports.html"> Document </a> </li>--}}
                                                    {{--<li> <a href="reports-owners-report.html"> Owners  </a> </li>--}}
                                                    {{--<li><a href="reports-stocks-report.html"> Stock </a></li>--}}
                                                    {{--<li><a href="report-print-jobs.html"> Print Jobs  </a></li>--}}
                                                    <li><a href="{{ route('payment-collection') }}"> Payment Collection</a></li>
                                                    <li><a href="{{ route('platform-charges') }}"> Platform Charges  </a></li>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                                                              
                            </div><!--  end card  -->
                    </div> <!-- end row -->
                    <!-- Button trigger modal -->
            </div>
        </div>
    </div>
</div>

@endsection