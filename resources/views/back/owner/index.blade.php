@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                            <h4 class="title">Document Owners</h4>
                    </div>
                    <div class="col-md-6">
                         <span class="btn-label">
                             <a class="btn small-screens-mg btn-default btn-fill btn-wd pull-right btn-top" href="{{ route('owner.create') }}">   <i class="fa fa-pencil"></i>   New Registration </a>
                        </span>
                    </div> 
                </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-inner-spacer">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h5 class="sub-title-2"> {{ $ownerCount }}  Owners</h5>
                                    </div>
                                    <form method="get" action="{{ route('owner.index') }}">
                                        <div class="col-md-2">
                                            <input type="text" name="owner_id" placeholder="Owner Id" class="form-control" >
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="name" placeholder="Full Name" class="form-control" >
                                        </div>
                                        <div class="col-md-2">
                                            <select name="marital_status" class="selectpicker" data-title="Marital Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Divorce</option>
                                                <option>Separated</option>
                                                ...
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="occupation" placeholder="Occupation" class="form-control" >
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-default btn-fill btn-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="content">
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="order-column table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Full Name</th>
                                                <th>Owner Id</th>
                                                <th>Date of Birth</th>
                                                <th>Occupation</th>
                                                <th>Marital Status</th>
                                                <th class="text-right">Actions</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($owners as $owner)
                                                <tr>
                                                    <td>{{ ($owners->currentpage()-1) * $owners->perpage() + $loop->index + 1 }}</td>
                                                    <td>{{ $owner->full_name  }}</td>
                                                    <td>{{ $owner->owner_id }}</td>
                                                    <td>{{ $owner->date_of_birth }}</td>
                                                    <td>{{ $owner->occupation }}</td>
                                                    <td>{{ $owner->marital_status }}</td>
                                                    <td class="text-right">
                                                        <a class="btn btn-default btn-fill small-btn" href="{{ route('owner.show', $owner->owner_id) }}"> View </a>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        {{ $owners->links() }}
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->


                    <!-- Button trigger modal -->




            </div>
        </div>


        

    </div>
</div>

    @push('scripts')
    @endpush

@endsection