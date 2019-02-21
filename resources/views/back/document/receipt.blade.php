@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

    @include('layouts.partial.topbar')

         <!-- Main Content starts Here -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row"> <h4 class="title"> Document Registration</h4> </div>
                <div class="row card card-inner-top card-inner-bottom modifier">
                    <div class="col-md-6 col-sm-12">
                            <div style="float: right; margin-top: -35px"> {!! QrCode::size(350)->generate(
                        "Registration Mode: " . $document->mode . "\nDocument ID: " . $document->document_id . "\nCreated Date: " . $document->created_at->toFormattedDateString() . "\nPayment Status: " .
                        $document->payment->status . "\nStatus: " . $document->status
                            ); !!}
                            </div>
                    </div>

                    <div class="col-md-6 col-sm-12">

                        <h5>Registration Mode</h5>
                        <p>{{ $document->mode }}</p>

                        <h5>Document ID</h5>
                        <p>#{{ $document->document_id }}</p>

                        <h5>Created Date</h5>
                        <p>{{ $document->created_at->toFormattedDateString() }}</p>

                        <h5>Payment Status</h5>
                        <p>{{ $document->payment->status }}</p>

                        <h5> Status</h5>
                        <p>{{ $document->status }}</p>
                        
                    </div>

                    <div class="col-md-12 text-center top-buffer-2">
                        <button type="submit" class="btn btn-default btn-fill btn-wd" onclick="window.print()" > Print slip </button>
                </div>
                        
                </div>

                
                

            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

@endsection