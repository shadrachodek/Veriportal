@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('report') }}" >    <h4 class="title"> Reports </h4></a>
                        </div>
                    </div>
                    <div class="card card-inner-spacer">
                        <div class="row top-panel">
                            <div class="col-md-7">
                                <h4 class="title-panel"> Platform Charges</h4>
                            </div>
                            <div class="col-md-5">
                                <form method="get" action="{{ route('platform-charges') }}">
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
                                                    <h5 class="sub-title-2"> Total Platform Charges  NGN {{ number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $total)),2)  }} </h5>
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
                                        <table id="" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th> Document ID </th>
                                                    <th> Payment Category </th>
                                                    <th> Clause Purpose </th>
                                                    <th> Amount Paid </th>
                                                    <th> Platform Charges </th>
                                                    <th> Payment Type </th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($charges as $charge)
                                                <tr>
                                                    <td> {{ $charge->document->document_id }} </td>
                                                    <td> {{ $charge->document->documentable_type }}  </td>
                                                    <td> {{ $charge->purpose_of_use }} </td>
                                                    <td> {{ number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $charge->amount )),2)  }} </td>
                                                    <td> {{ number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $charge->charges )),2)  }} </td>
                                                    <td> {{ $charge->payment_type }} </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->

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