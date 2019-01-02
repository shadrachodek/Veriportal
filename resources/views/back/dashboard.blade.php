@extends('layouts.back-vue-pages')
@section('content')
@include('layouts.partial.sidebar')

    <div class="main-panel">

   @include('layouts.partial.topbar')

        <div class="main-content" id="app">
            <div class="container-fluid">


                    <h4 class="title">Dashboards</h4>
                    <div class="row icon-resizer">
                        <div class="col-md-4">
                            <div class="card">
                                <owner-component></owner-component>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <new-reg-component></new-reg-component>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <transfer-component></transfer-component>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <graph-component></graph-component>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
