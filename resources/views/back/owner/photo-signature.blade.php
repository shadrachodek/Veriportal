@extends('layouts.back-pages')
@section('content')
@include('layouts.partial.sidebar')

<div class="main-panel">

	@include('layouts.partial.topbar')
		<!-- Main Content starts Here -->

		<div class="main-content">
			<div class="container-fluid">

				<h4 class="title"> New Registration - Photograph & Signature </h4>

				<div class="row card card-inner-spacer ">

					<!-- take photograph starts here Here -->
					@if(!$owner->photo)
					<form action="{{ route('photo', $owner->owner_id) }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="col-md-6">

						<div class="file-upload">
							<button class="file-upload-btn" type="button" onclick="$('.photo-upload-input').trigger( 'click' )">Add Passport</button>

							<div class="photo-upload-wrap">
								<input class="photo-upload-input" name="photo" type='file' onchange="readURL1(this);" accept="image/*" />
								<div class="drag-text">
									<h3>Drag and drop your Passport Photograph</h3>
								</div>
							</div>
							<div class="photo-upload-content">
								<img class="photo-upload-image" src="#" alt="your image" />
								<div class="image-title-wrap">
									<button type="button" onclick="removeUploadp()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
								</div>
							</div>
						</div>

						<button type="submit" class=" btn btn-default btn-fill  btn-block"> Upload Passport </button>

					</div>
					</form>
					@endif
					@if(!$owner->signature)
					<form action="{{ route('signature', $owner->owner_id) }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="col-md-6">
						<div class="file-upload">
							<button class="file-upload-btn" type="button" onclick="$('.sig-upload-input').trigger( 'click' )">Add Signature</button>
							<div class="sig-upload-wrap">
								<input class="sig-upload-input" name="signature" type='file' onchange="readURL(this);" accept="image/*" />
								<div class="drag-text">
									<h3>Drag and drop your Signature Here</h3>
								</div>
							</div>
							<div class="sig-upload-content">
								<img class="sig-upload-image" src="#" alt="your image" />
								<div class="image-title-wrap">
									<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
								</div>
							</div>
						</div>

						<button type="submit" class=" btn btn-default btn-fill  btn-block">Upload Signature</button>

					</div>
					</form>
					@endif



				</div>



			</div>
		</div>

		<!-- Main Content starts Here -->


        

    </div>
</div>

	@push('scripts')
		<script type="text/javascript">

            function readURL1(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.photo-upload-wrap').hide();

                        $('.photo-upload-image').attr('src', e.target.result);
                        $('.photo-upload-content').show();

                        $('.image-title').html(input.files[0].name);
                    };

                    reader.readAsDataURL(input.files[0]);

                } else {
                    removeUpload();
                }
            }

            function removeUploadp() {
                $('.photo-upload-input').replaceWith($('.photo-upload-input').clone());
                $('.photo-upload-content').hide();
                $('.photo-upload-wrap').show();
            }
            $('.photo-upload-wrap').bind('dragover', function () {
                $('.photo-upload-wrap').addClass('image-dropping');
            });
            $('.photo-upload-wrap').bind('dragleave', function () {
                $('.photo-upload-wrap').removeClass('image-dropping');
            });



            function readURL(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.sig-upload-wrap').hide();

                        $('.sig-upload-image').attr('src', e.target.result);
                        $('.sig-upload-content').show();

                        $('.image-title').html(input.files[0].name);
                    };

                    reader.readAsDataURL(input.files[0]);

                } else {
                    removeUpload();
                }
            }

            function removeUpload() {
                $('.sig-upload-input').replaceWith($('.sig-upload-input').clone());
                $('.sig-upload-content').hide();
                $('.sig-upload-wrap').show();
            }
            $('.sig-upload-wrap').bind('dragover', function () {
                $('.sig-upload-wrap').addClass('image-dropping');
            });
            $('.sig-upload-wrap').bind('dragleave', function () {
                $('.sig-upload-wrap').removeClass('image-dropping');
            });


		</script>

	@endpush

@endsection