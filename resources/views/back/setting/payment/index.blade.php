@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <h4 class="title"> Settings </h4>
                    </div>


                </div>



                <div class="card card-inner-spacer">

                    <div class="row top-panel">

                        <div class="col-md-12">


                            <h4 class="title-panel"> Payment Type</h4>


                        </div>


                    </div>

                </div>



                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-inner-spacer">
                            <div class="row spacerx2">
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                                    <a href="#ModalCenter" class="btn tweaked-margin btn-default btn-fill small-btn btn-block " data-toggle="modal" data-target="#ModalCenter">Add Payment Type</a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="fresh-datatables">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th> Name </th>
                                            <th> Fee </th>
                                            <th> Category </th>
                                            <th class="text-right"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(@$types)
                                        @foreach($types as $type)
                                        <tr>
                                            <td> {{ $type->name }} </td>
                                            <td> {{ $type->fee }} </td>
                                            <td> {{ $type->category }} </td>
                                            <td class="text-right">
                                                <a class="btn btn-warning btn-fill small-btn" href="{{ route('setting.cofo.type.destroy', $type->id) }}" >Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end content-->
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->


                <!-- Button trigger modal -->


                <!-- Add Cofo Type -->

                <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <form method="post" action="{{ route('setting.cofo.type.store') }}">
                            @csrf
                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">
                                    <div class="card st-modal-control">
                                        <div class="stock-pop-header">
                                            <h4> New Payment Type</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label> Document Category </label>
                                                    <select name="category" class="selectpicker" id="selectprod" data-title="Select Document Category " data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                        <option class="selectors new-cat"> New </option>
                                                        <option class="selectors new-cat"> Change of Purpose </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label> Name of Document </label>
                                                    <input type="text" name="name" placeholder="Type name of document"  class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label> Document Fee </label>
                                                    <input type="number" name="fee" placeholder="Enter the document fee here"  class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-4">
                                                <div class="text-center">
                                                    <button class="btn btn-default top-buffer btn-fill small-btn btn-block" type="submit">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

                <!-- Edit Cofo Type -->


            </div>

            <!-- Modal Transfer stock ends here-->


        </div>
    </div>




    </div>
    </div>
@endsection