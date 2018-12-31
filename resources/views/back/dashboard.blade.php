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
                                            <h5 class="pull-left bounce"> {{ $totalDocumentOwners }} </h5>
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
                                    <p class="text-muted">New Document Registration</p>

                                    <div class="row">

                                        <div class="col-md-6 col-sm-6">
                                            <h5 class="pull-left">{{ $newDocmentReg }}</h5>
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
                                            <h5 class="pull-left"> {{ $docmentOwnershipTransfer }} </h5>
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
                            <div class="content">
                                <canvas id="line-chart" width="500" height="150"></canvas>
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
            new Chart(document.getElementById("line-chart"), {
                type: 'line',
                data: {
                    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                    datasets: [{
                        data: [86,114,106,106,107,111,133,221,783,2478],
                        label: "Documents List",
                        borderColor: "#3e95cd",
                        fill: false
                    }, {
                        data: [168,170,178,190,203,276,408,547,675,734],
                        label: "Documents Approved",
                        borderColor: "#3cba9f",
                        fill: false
                    }, {
                        data: [40,20,10,16,24,38,74,167,508,784],
                        label: "Documents Declined",
                        borderColor: "#e8c3b9",
                        fill: false
                    }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'World population per region (in millions)'
                    }
                }
            });



            // var totalDocmentOwners;
            // $.get("/total-document-owners", function(data, status){
            //     totalDocmentOwners  = data ;
            // });
            // $.getJSON("/tasks", function(data, status) {
            //     totalDocmentOwners = data;
            // });
            //
            // function AppViewModel() {
            //     var self = this;
            //     self.totalDocmentOwners = ko.observable({});
            //     self.newDocmentReg = ko.observable(0);
            //     self.docmentOwnershipTransfer = ko.observable(0);
            //
            //     $.get("/total-document-owners", function(data, status) {
            //         self.totalDocmentOwners(data);
            //     });
            // }
            //
            // // Activates knockout.js
            // ko.applyBindings(new AppViewModel());
        </script>
    @endpush

@endsection
