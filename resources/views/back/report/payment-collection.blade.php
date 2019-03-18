@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                              <a href="{{ route('report') }}" ><h4 class="title"> Reports </h4></a>
                        </div>
                    </div>
                    <div class="card card-inner-spacer">
                        <div class="row top-panel">
                            <div class="col-md-7">
                                <h4 class="title-panel"> Payment Collection</h4>
                            </div>
                            <div class="col-md-5">
                                <form method="get" action="{{ route('payment-collection') }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group input-group date">
                                                <input type="text" name="from-date" value="{{ @$_GET['from-date'] }}" class="form-control datepicker1" autocomplete="off"  placeholder="From Date"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group input-group date">
                                                <input name="to-date" type="text" value="{{ @$_GET['to-date'] }}" class="form-control datepicker2" autocomplete="off"  placeholder="To Date"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bottom-buffer">
                                        <div class="col-md-6">
                                            <select name="payment_type" class="selectpicker" data-title="Payment Type" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                               @if(@$_GET['payment_type'] )
                                                    <option selected>{{ $_GET['payment_type'] }}</option>
                                                    <option value="">{{  "All" }}</option>
                                                @endif
                                                @foreach($paymentTypes as $type)
                                                    <option>{{ $type }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="purpose_of_use" class="selectpicker" data-title="Clause Purpose" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                                @if(@$_GET['purpose_of_use'] )
                                                    <option selected>{{ $_GET['purpose_of_use'] }}</option>
                                                    <option value="">{{  "All" }}</option>
                                                @endif
                                                @foreach($cofoTypes as $type)
                                                    <option>{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-default btn-fill  btn-block" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-inner-spacer">
                                    <div class="row spacerx2">
                                            <div class="col-md-8">
                                                    <h5 class="sub-title-2"> Total Platform Charges NGN {{ number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $total)),2)  }}  </h5>
                                            </div>
                                            <div class="col-md-2" style="display: none">
                                                    <button class="btn btn-success small-screens-mg small-btn  btn-fill btn-block">PDF</button>
                                            </div>
                                            <div class="col-md-2" style="display: none">
                                                <button class="btn btn-success  btn-fill small-btn btn-block"> EXCEL </button>
                                        </div>
                                    </div>
                                <div class="content">
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th> Document ID </th>
                                                    <th> Document Type </th>
                                                    <th> Clause Purpose </th>
                                                    <th> Amount Paid </th>
                                                    <th> Payment Type </th>
                                                    <th> Owner Full Name </th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payments as $payment)
                                                <tr>
                                                    <td> {{ $payment->document->document_id }}  </td>
                                                    <td> {{ $payment->document->documentable_type }} </td>
                                                    <td> {{ $payment->purpose_of_use }}  </td>
                                                    <td> {{number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $payment->amount)),2)  }} </td>
                                                    <td> {{ $payment->payment_type }} </td>
                                                    <td> {{ $payment->name }} </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $payments->links() }}
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->

                {{--<div class="row">--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<div class="dataTables_info" id="datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 162 entries</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-7">--}}
                        {{--<div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li class="paginate_button first disabled" id="datatables_first">--}}
                                    {{--<a href="#" aria-controls="datatables" data-dt-idx="0" tabindex="0">First</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button previous disabled" id="datatables_previous">--}}
                                    {{--<a href="#" aria-controls="datatables" data-dt-idx="1" tabindex="0">Previous</a></li>--}}
                                {{--<li class="paginate_button active">--}}
                                    {{--<a href="#" aria-controls="datatables" data-dt-idx="2" tabindex="0">1</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button "><a href="#" aria-controls="datatables" data-dt-idx="3" tabindex="0">2</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button next" id="datatables_next">--}}
                                    {{--<a href="#" aria-controls="datatables" data-dt-idx="9" tabindex="0">Next</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button last" id="datatables_last">--}}
                                    {{--<a href="#" aria-controls="datatables" data-dt-idx="10" tabindex="0">Last</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>

    </div>
</div>


    @push('scripts')
	<script type="text/javascript">

        $(function () {
            $('.datepicker1').datetimepicker({
                format: 'YYYY-MM-DD',
            });

            $('.datepicker2').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: false //Important! See issue #1075
            });

             $('.datepicker1').on("dp.change", function (e) {
                 $('.datepicker2').data("DateTimePicker").minDate(e.date);
             });

             $('.datepicker2').on("dp.change", function (e) {
                 $('.datepicker1').data("DateTimePicker").maxDate(e.date);
             });

         });
    
        </script>
    @endpush



@endsection
