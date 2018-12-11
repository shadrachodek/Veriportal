@extends('layouts.back-pages')
@section('content')
@include('layouts.partial.sidebar')

<div class="main-panel">

	@include('layouts.partial.topbar')


         <!-- Main Content starts Here -->
        <div class="main-content">
            <div class="container-fluid">

                    <h4 class="title">New Registration - Photograph & Signature</h4>

				<form action="{{ route('photo', $owner->owner_id) }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">

						<div class="col-md-12">

							<div class="form-group">
								<p class="space-bottom"> Attach Document</p>
								<div class="input-group control-group increment" >
									<input type="file" name="photo" class="form-control custom-file-input">
									<div class="input-group-btn">
										<button type="submit" class=" pull-right btn btn-default btn-fill btn-wd mg-top"> Upload </button>
									</div>
								</div>

							</div>
						</div>
					</div>
				</form>
				<form action="{{ route('signature', $owner->owner_id) }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">

						<div class="col-md-12">

							<div class="form-group">
								<p class="space-bottom"> Signature</p>

								<div class="input-group control-group increment" >
									<input type="file" name="signature" class="form-control custom-file-input" placeholder="Select to Upload documents">
									<div class="input-group-btn">
										<button type="submit" class=" pull-right btn btn-default btn-fill btn-wd mg-top"> Upload </button>
									</div>
								</div>


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