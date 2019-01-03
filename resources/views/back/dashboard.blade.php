@extends('layouts.back-vue-pages')
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
                                            <h5 class="pull-left bounce"> {{ $totalDocumentOwners }}</h5>
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
                                            <h5 class="pull-left"> {{ $newDocmentReg }}</h5>
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
                                            <h5 class="pull-left"> {{ $ownershipTransfer }} </h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <i class="pe-7s-copy-file pull-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row" id="app">
                    <graph-component></graph-component>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
