@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

    @include('layouts.partial.topbar')
         <!-- Main Content starts Here -->

        <div class="main-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title">Document Registration</h4>
                    </div>

                </div>

                  <!-- ****************************************************************************************************** -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('doc.payment', $document->document_id) }}">
                <div class="row card card-inner-spacer modifier">

                  
                    <h3>Payment</h3>

                     <!-- ****************************************************************************************************** -->

                        @csrf
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>Amount Paid</label>
                                    <input type="number" readonly name="amount_paid" class="form-control" value="{{ $fee }}" />
                                </div>

                            </div>

                            <div class="col-md-6">


                                <div class="form-group">
                                    <label>Select Payment Type</label>
                                    <select name="payment_type" class="selectpicker" data-title="Select Payment Type" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                        @foreach($payment_types as $payment_type)
                                        <option>{{ $payment_type }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        </div>



                          <!-- ****************************************************************************************************** -->

                            

                        <div class="row top-buffer-3">

                            <div class="col-md-6">   

                        
                            </div>

                            <div class="col-md-6 ">   
                            
                                <button type="submit" class=" pull-right btn btn-default btn-fill btn-wd mg-top ">Save & Continue</button>
                        
                            </div>

                         </div>

                </div>
                </form>

            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

@endsection