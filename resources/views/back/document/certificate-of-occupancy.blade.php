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

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> House/Plot Number </label>
                                    <input type="text" value="{{ old('house_plot_number') }}" name="house_plot_number" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>Street Name</label>
                                    <input type="text" value="{{ old('street_name') }}" name="street_name" class="form-control" />
                                </div>

                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" value="{{ old('city') }}" name="city" class="form-control" />
                                </div>

                            </div>

                        </div>



                        <!-- ****************************************************************************************************** -->
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label> Area </label>
                                    <input type="text" value="{{ old('area') }}" name="area" class="form-control" />
                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label> File Number </label>
                                    <input type="text" name="file_number" value="{{ old('file_number') }}"  class="form-control">

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
                                        <option>Public </option>
                                        <option> Residential</option>
                                        <option> Commercial </option>
                                        <option> Commercial/Residential </option>

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
                                    <input type="text" value="2 Years" name="development_period" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">


                                <div class="form-group">
                                    <label> Building Value </label>
                                    <input type="number" value="{{ old('building_value') }}" name="building_value" class="form-control" />
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
                                    <input type="text" value="{{ old('term') }}" name="term" class="form-control" />
                                </div>

                            </div>

                            <div class="col-md-4">


                                <div class="form-group">
                                    <label>Revision Period</label>
                                    <input type="text" value="{{ old('revision_period') }}" name="revision_period" class="form-control" />
                               </div>

                            </div>

                        </div>

                        <!-- ****************************************************************************************************** -->


                        <div class="row">

                            <div class="col-md-offset-3 col-md-6 col-md-offset-3">

                                <div class="file-uploader">
                                    <div class="file-uploader__message-area">
                                        <p>Select a file to upload</p>
                                    </div>
                                    <div class="file-chooser">
                                        <input class="file-chooser__input" type="file" name="attach_doc[]">
                                    </div>
                                </div>

                            </div>
                        </div>

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

                            {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<p class="space-bottom"> Attach Document</p>--}}
                                    {{--<div class="input-group control-group increment" >--}}
                                        {{--<input type="file" name="attach_doc[]" class="form-control custom-file-input" placeholder="Select to Upload documents">--}}
                                        {{--<div class="input-group-btn">--}}
                                            {{--<button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clone hide">--}}
                                        {{--<div class="control-group input-group" style="margin-top:10px">--}}
                                            {{--<input type="file" name="attach_doc[]" class="form-control custom-file-input" placeholder="Select to Upload documents">--}}
                                            {{--<div class="input-group-btn">--}}
                                                {{--<button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}
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

        <script type="text/javascript">

            (function( $ ) {

                $.fn.uploader = function( options ) {
                    var settings = $.extend({
                        MessageAreaText: "No files selected.",
                        MessageAreaTextWithFiles: "Attach Document:",
                        DefaultErrorMessage: "Unable to open this file.",
                        BadTypeErrorMessage: "We cannot accept this file type at this time.",
                        acceptedFileTypes: ['pdf', 'jpg', 'gif', 'jpeg', 'bmp', 'tif', 'tiff', 'png', 'xps', 'doc', 'docx',
                            'fax', 'wmp', 'ico', 'txt', 'cs', 'rtf', 'xls', 'xlsx']
                    }, options );

                    var uploadId = 1;
                    //update the messaging
                    $('.file-uploader__message-area p').text(options.MessageAreaText || settings.MessageAreaText);

                    //create and add the file list and the hidden input list
                    var fileList = $('<ul class="file-list"></ul>');
                    var hiddenInputs = $('<div class="hidden-inputs hidden"></div>');
                    $('.file-uploader__message-area').after(fileList);
                    $('.file-list').after(hiddenInputs);

                    //when choosing a file, add the name to the list and copy the file input into the hidden inputs
                    $('.file-chooser__input').on('change', function(){
                        var file = $('.file-chooser__input').val();
                        var fileName = (file.match(/([^\\\/]+)$/)[0]);

                        //clear any error condition
                        $('.file-chooser').removeClass('error');
                        $('.error-message').remove();

                        //validate the file
                        var check = checkFile(fileName);
                        if(check === "valid") {

                            // move the 'real' one to hidden list
                            $('.hidden-inputs').append($('.file-chooser__input'));

                            //insert a clone after the hiddens (copy the event handlers too)
                            $('.file-chooser').append($('.file-chooser__input').clone({ withDataAndEvents: true}));

                            //add the name and a remove button to the file-list
                            $('.file-list').append('<li style="display: none;"><span class="file-list__name">' + fileName + '</span><button class="removal-button" data-uploadid="'+ uploadId +'"></button></li>');
                            $('.file-list').find("li:last").show(800);

                            //removal button handler
                            $('.removal-button').on('click', function(e){
                                e.preventDefault();

                                //remove the corresponding hidden input
                                $('.hidden-inputs input[data-uploadid="'+ $(this).data('uploadid') +'"]').remove();

                                //remove the name from file-list that corresponds to the button clicked
                                $(this).parent().hide("puff").delay(10).queue(function(){$(this).remove();});

                                //if the list is now empty, change the text back
                                if($('.file-list li').length === 0) {
                                    $('.file-uploader__message-area').text(options.MessageAreaText || settings.MessageAreaText);
                                }
                            });

                            //so the event handler works on the new "real" one
                            $('.hidden-inputs .file-chooser__input').removeClass('file-chooser__input').attr('data-uploadId', uploadId);

                            //update the message area
                            $('.file-uploader__message-area').text(options.MessageAreaTextWithFiles || settings.MessageAreaTextWithFiles);

                            uploadId++;

                        } else {
                            //indicate that the file is not ok
                            $('.file-chooser').addClass("error");
                            var errorText = options.DefaultErrorMessage || settings.DefaultErrorMessage;

                            if(check === "badFileName") {
                                errorText = options.BadTypeErrorMessage || settings.BadTypeErrorMessage;
                            }

                            $('.file-chooser__input').after('<p class="error-message">'+ errorText +'</p>');
                        }
                    });

                    var checkFile = function(fileName) {
                        var accepted          = "invalid",
                            acceptedFileTypes = this.acceptedFileTypes || settings.acceptedFileTypes,
                            regex;

                        for ( var i = 0; i < acceptedFileTypes.length; i++ ) {
                            regex = new RegExp("\\." + acceptedFileTypes[i] + "$", "i");

                            if ( regex.test(fileName) ) {
                                accepted = "valid";
                                break;
                            } else {
                                accepted = "badFileName";
                            }
                        }

                        return accepted;
                    };
                };
            }( jQuery ));

            //init
            $(document).ready(function(){
                $('.fileUploader').uploader({
                    MessageAreaText: "No files selected. Please select a file."
                });
            });

        </script>

    @endpush

@endsection