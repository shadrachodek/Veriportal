@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

    @include('layouts.partial.topbar')

         <!-- Main Content starts Here -->

        <div class="main-content">
            <div class="container-fluid">

                    <h4 class="title">New Owner Registration</h4>

                <div class="row card card-inner-spacer card-inner-top card-inner-bottom">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<form method="post" action="{{ route('owner.store') }}">
    @csrf
                    <!-- First row of inputs -->

                    <div class="col-md-4">

                            <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" value="{{ old('first_name') }}" name="first_name" placeholder="Enter first name" class="form-control" />
                            </div>

                    </div>

                    <div class="col-md-4">

                            <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" value="{{ old('middle_name') }}" name="middle_name" placeholder="Enter Middle Name" class="form-control" />
                            </div>
                        
                    </div>

                    <div class="col-md-4">

                            <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" value="{{ old('last_name') }}" name="last_name" placeholder="Enter Last Name" class="form-control" />
                            </div>
                        
                    </div>

                          <!-- First row of inputs ends here -->

                          <!-- second row Starts here -->

                          <div class="col-md-4">

                                <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="form-group">
                                        <input id="datetimepicker" type="text" class="form-control datetimepicker" name="date_of_birth" placeholder="Select Date of Birth" value="{{ old('date_of_birth') }}">
                                        </div>
                                </div>
    
                        </div>
    
                        <div class="col-md-4">
    
                                <div class="form-group">
                                        <label>Marital Status</label>
                                        <select name="marital_status" class="selectpicker" data-title="Single Marital Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                        @foreach($maritalStatus as $status)
                                                <option>{{ $status }}</option>
                                            @endforeach
                                            </select>
                                </div>
                            
                        </div>
    
                        <div class="col-md-4">
    
                                <div class="form-group">
                                    <label>Occupation</label>
                                    <input type="text" value="{{ old('occupation') }}" name="occupation" placeholder="Enter Occupation" class="form-control" />
                                </div>
                            
                        </div>

                            <!-- second row ends here -->

                            <!-- Text Area starts here -->

                        <div class="col-md-12">
                                <label>Address</label>
                                <textarea id="textarea" rows="5" value="{{ old('address') }}" name="address" placeholder="Enter your Address Details" style="margin-top: 0px; margin-bottom: 15px; width: 100%;"></textarea>

                        </div>

                        <div class="col-md-4">

                                <div class="form-group">
                                        <label>City</label>
                                        <input type="text" value="{{ old('city') }}" name="city" placeholder="Enter City" class="form-control" />
                                </div>
    
                        </div>
    
                        <div class="col-md-4">
    
                                <div class="form-group">
                                        <label>LGA/LCDA</label>
                                        <input type="text" value="{{ old('lga_lcda') }}" name="lga_lcda" placeholder="Enter LGA/LCDA" class="form-control" />
                                </div>
                            
                        </div>
    
                        <div class="col-md-4">
    
                                <div class="form-group">
                                        <label>Nearest Bus-Stop</label>
                                        <input type="text" value="{{ old('nearest_bus_stop') }}" name="nearest_bus_stop" placeholder="Enter Nearest Bus-Stop" class="form-control" />
                                </div>
                            
                        </div>


                        <div class="col-md-4">

                                <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" value="{{ old('telephone') }}" name="telephone" placeholder="Enter Telephone" class="form-control" />
                                </div>
    
                        </div>
    
                        <div class="col-md-4">
    
                                <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" value="{{ old('mobile') }}" name="mobile" placeholder="Enter Mobile" class="form-control" />
                                </div>
                            
                        </div>
    
                        <div class="col-md-4">
    
                                <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" value="{{ old('email_address') }}" name="email_address" placeholder="Enter Email Address" class="form-control" />
                                </div>
                            
                        </div>

                        <div class="col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-default btn-fill btn-block mg-top"> Submit & Continue </button>
                        </div>
</form>
                </div>

            </div>
        </div>

        <!-- Main Content starts Here -->
        

    </div>
</div>

@endsection
