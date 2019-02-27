@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                                <h4 class="title"> Reports </h4>
                        </div>
                    </div>
                    <div class="card card-inner-spacer">
                        <div class="row top-panel">
                            <div class="col-md-7">
                                <a href="{{ route('report') }}" > <h4 class="title-panel"> Platform Charges</h4> </a>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                        <input type="text" class="form-control datepicker datepicker1"  placeholder="From Date"/>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                        <input type="text" class="form-control datepicker datepicker1"  placeholder="To Date"/>
                                                </div>
                                                <!-- <select name="warehouse" class="selectpicker" data-title="Approval Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                        <option value="id">Pending</option>
                                                        <option value="ms">Approved</option>
                                                    ...
                                                </select> -->
                                        </div>
                                </div>
                                <div class="row bottom-buffer">
                                        <div class="col-md-6">
                                                <select name="payment_type" class="selectpicker" data-title="Payment Categories" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                        <option value="id">New</option>
                                                        <option value="ms">Change of Purpose</option>
                                                    ...
                                                </select>
                                        </div>
                                        <div class="col-md-6">
                                                <select name="warehouse" class="selectpicker" data-title="Clause Purpose" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                    ...
                                                </select>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-default btn-fill  btn-block">Submit</button>
                                    </div>
                                </div>
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
                                            <div class="col-md-2">
                                                    <button class="btn btn-success small-screens-mg small-btn  btn-fill btn-block">PDF</button>
                                            </div>
                                            <div class="col-md-2">
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
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($charges as $charge)
                                                <tr>
                                                    <td> {{ $charge->document->document_id }} </td>
                                                    <td> {{ $charge->document->documentable_type }}  </td>
                                                    <td> {{ $charge->document->documentable->purpose_of_use }} </td>
                                                    <td> {{number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $charge->document->payment->amount)),2)  }} </td>
                                                    <td> {{ number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",  $charge->charges)),2)  }} </td>
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
            $(document).ready(function() {
                $('#datatables').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "unique Ids",
                    }

                });


                var table = $('#datatables').DataTable();

                // // Edit record
                // table.on( 'click', '.edit', function () {
                //     $tr = $(this).closest('tr');

                //     if($tr.hasClass('child')){
                //         $tr = $tr.prev('.parent');
                //     }

                //     var data = table.row($tr).data();
                //     alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
                // } );




            });

            $(function () {
                $('.datepicker1').datetimepicker();
                format: 'LT'
            });

        </script>

     @endpush
@endsection