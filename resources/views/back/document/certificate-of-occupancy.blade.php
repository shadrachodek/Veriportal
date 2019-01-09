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
                <form method="POST" action="{{ route('cofo.store', $owner) }}" enctype="multipart/form-data">
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
                                    <select name="purpose_of_use" class="selectpicker" data-title="Select Purpose of Use" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                        <option value="Commercial">Commercial</option>
                                        <option value="Residential">Residential</option>

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
                                    <input type="text" value="{{ old('commencement_year') }}" name="commencement_year" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Development period</label>
                                    <select name="development_period" class="selectpicker" data-title="Select Development period" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                        <option value="3 Months">3 Months</option>
                                        <option value="6 Months">6 Months</option>
                                        <option value="1 Year">1 Year</option>
                                        <option value="2 Years">2 Years</option>
                                        <option value="3 Years">3 Years</option>
                                        <option value="4 Years">4 Years</option>
                                        <option value="5 Year">5 Year</option>
                                        <option value="6 Years">6 Years</option>
                                        <option value="7 Years">7 Years</option>
                                        <option value="8 Years">8 Years</option>
                                        <option value="9 Years">9 Years</option>
                                        <option value="10 Years">10 Years</option>

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
                                    <input type="term" value="{{ old('term') }}" name="term" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-4">


                                <div class="form-group">
                                    <label>Revision Period</label>
                                    <input type="revision_period" value="{{ old('revision_period') }}" name="revision_period" class="form-control" />
                               </div>

                            </div>

                        </div>

                        <!-- ****************************************************************************************************** -->

                        {{--<div class="row">--}}
                            {{--<div class="col-md-4">--}}
                                {{--<form method="post" class="file-uploader" action="" enctype="multipart/form-data">--}}
                                    {{--<div class="file-uploader__message-area">--}}
                                        {{--<p>Select a file to upload</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="file-chooser">--}}
                                        {{--<input class="file-chooser__input" type="file">--}}
                                    {{--</div>--}}
                                    {{--<input class="file-uploader__submit-button" type="submit" value="Upload">--}}
                                {{--</form>--}}
                            {{--</div>--}}

                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="space-bottom"> Attach Document</p>
                                    <div class="input-group control-group increment" >
                                        <input type="file" name="attach_doc[]" class="form-control custom-file-input" placeholder="Select to Upload documents">
                                        <div class="input-group-btn">
                                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                    </div>
                                    <div class="clone hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="file" name="attach_doc[]" class="form-control custom-file-input" placeholder="Select to Upload documents">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>

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
                </form>
            </div>
        </div>
        <!-- Main Content starts Here -->
    </div>
</div>
    @push('scripts')
        <script type="text/javascript">

            $(document).ready(function() {

                $(".btn-success").click(function(){
                    var html = $(".clone").html();
                    $(".increment").after(html);
                });

                $("body").on("click",".btn-danger",function(){
                    $(this).parents(".control-group").remove();
                });

            });

        </script>

    @endpush

@endsection