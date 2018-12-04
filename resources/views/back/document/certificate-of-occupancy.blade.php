@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

    @include('layouts.partial.topbar')

         <!-- Main Content starts Here -->
        <div class="main-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Document Registration</h4>
                    </div>

                    <div class="col-md-6">
                            <h4 class="title pull-right"> <span>Type:</span>  Certificate of Occupancy</h4>
                    </div>

                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
                  <!-- ****************************************************************************************************** --> 
                <form method="POST" action="{{ route('cofo.store', $owner_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row card card-inner-spacer modifier">

                        <!-- First row of inputs -->

                        <h3>Location Information</h3>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label> House/Plot Number </label>
                                    <input type="text" value="{{ old('house_plot_number') }}" name="house_plot_number" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Street Name</label>
                                    <input type="text" value="{{ old('street_name') }}" name="street_name" class="form-control" />
                                </div>

                            </div>

                        </div>



                        <!-- ****************************************************************************************************** -->
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label> Local Government Area </label>
                                    <input type="text" value="{{ old('lga') }}" name="lga" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" value="{{ old('city') }}" name="city" class="form-control" />
                                </div>

                            </div>
                        </div>
                        <!-- ****************************************************************************************************** -->

                        <h3>Property Particulars</h3>

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> Dimension - Area (sqm) </label>
                                    <input type="text" value="{{ old('dimension') }}" name="dimension" class="form-control" />

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> Survey Plan Number </label>
                                    <input type="text" value="{{ old('survey_plan_number') }}" name="survey_plan_number" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>Purpose of Use</label>
                                    <select name="purpose_of_use" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                        <option value="id">Capentery</option>
                                        <option value="ms">Lawyer</option>

                                        ...
                                    </select>
                                </div>

                            </div>

                        </div>

                        <!-- ****************************************************************************************************** -->

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>Commencement Year</label>
                                    <select name="commencement_year" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                        <option value="id">Capentery</option>
                                        <option value="ms">Lawyer</option>

                                        ...
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Development period</label>
                                    <select name="development_period" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                        <option value="id">Capentery</option>
                                        <option value="ms">Lawyer</option>

                                        ...
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-4">


                                <div class="form-group">
                                    <label> Building Value </label>
                                    <input type="text" value="{{ old('building_value') }}" name="building_value" class="form-control" />
                                </div>


                            </div>

                        </div>

                        <!-- ****************************************************************************************************** -->

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> Yearly Rent - Payable </label>
                                    <input type="number" value="{{ old('yearly_rent_payable') }}" name="yearly_rent_payable" class="form-control" />
                                </div>


                            </div>



                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Term</label>
                                    <select name="term" class="selectpicker"  data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                        <option value="id">Capentery</option>
                                        <option value="ms">Lawyer</option>

                                        ...
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-4">


                                <div class="form-group">
                                    <label>Revision Period</label>
                                    <select name="revision_period" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                        <option value="id">Capentery</option>
                                        <option value="ms">Lawyer</option>

                                        ...
                                    </select>
                                </div>

                            </div>

                        </div>

                        <!-- ****************************************************************************************************** -->

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <p class="space-bottom"> Attach Document</p>
                                        <input name="attach_doc[]"  type="file" class="form-control"  placeholder="Select to Upload documents" multiple>
                                </div>
                            </div>
                        </div>



                        <div class="row top-buffer-3">

                            <div class="col-md-6">


                            </div>

                            <div class="col-md-6 ">

                                <button type="submit" class=" pull-right btn btn-default btn-fill btn-wd mg-top"> Save & Continue </button>

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