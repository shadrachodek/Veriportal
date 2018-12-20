@extends('layouts.back-pages')
@section('content')
@include('layouts.partial.sidebar')

    <div class="main-panel">

   @include('layouts.partial.topbar')

        <div class="main-content">
            <div class="container-fluid">


                    <h4 class="title">Dashboards</h4>
                    <div class="row icon-resizer">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="content">
                                    <p class="text-muted">Total Document Owners</p>

                                    <div class="row icon-resizer">

                                        <div class="col-md-6 col-sm-6">
                                            <h5 class="pull-left"> 2,262 </h5>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <i class="pe-7s-copy-file pull-right"></i>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <example-component></example-component>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="content">
                                    <p class="text-muted">New Document Registration</p>

                                    <div class="row">

                                        <div class="col-md-6 col-sm-6">
                                            <h5 class="pull-left"> 4,320 </h5>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <i class="pe-7s-copy-file pull-right"></i>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="content">
                                    <p class="text-muted">Document Ownership Transfer</p>

                                    <div class="row">

                                        <div class="col-md-6 col-sm-6">
                                            <h5 class="pull-left"> 700 </h5>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <i class="pe-7s-copy-file pull-right"></i>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="row card-inner-spacer">
                                <div class="col-md-2 col-sm-12 pull-left">

                                    <select name="select-document" class="selectpicker" data-title="Documents Created" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                        <option value="id">Bahasa Indonesia</option>
                                        <option value="ms">Bahasa Melayu</option>
                                        ...
                                    </select>
                                </div>

                                <div class="col-md-2 col-sm-12 pull-right">

                                        <select name="select-duration" class="selectpicker" data-title="Last 6 Months" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                            <option value="id">Bahasa Indonesia</option>
                                            <option value="ms">Bahasa Melayu</option>
                                            ...
                                        </select>
                                    </div>



                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                            </div>
                            <div class="footer">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Documents List
                                    <i class="fa fa-circle text-danger"></i> Documents Approved
                                    <i class="fa fa-circle text-warning"></i> Documents Declined
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>




    </div>
</div>

    @push('scripts')
        <script type="text/javascript">
            $.get("/total-document-owners", function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
            });
        </script>
    @endpush

@endsection
