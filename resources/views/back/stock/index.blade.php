@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')
                <div class="main-content anchor-styling stock-styling">
                    <div class="container-fluid ">

                        <div class="row ">



                            <h4 class="title">Stock Management</h4>



                        </div>

                        <div class="row">

                            <div class="card card-inner-spacer card-inner-bottom-2">

                                <div class="row">


                                    <div class="col-md-6 ">

                                        <h5 class="sub-title-2 ">2 - Available Items</h5>

                                    </div>




                                    <div class="col-md-6 text-right">

                                        <a class="btn btn-default btn-fill small-btn " href="#ModalCenter-2" data-toggle="modal" data-target="#ModalCenter-2">New Item</a>
                                        <a class="btn btn-danger btn-fill small-btn " href="#ModalCenter-3" data-toggle="modal" data-target="#ModalCenter-3">Material Request</a>
                                        <a class="btn tweaked-margin btn-success btn-fill small-btn " href="#ModalCenter" data-toggle="modal" data-target="#ModalCenter">Receive Stock </a>


                                    </div>

                                </div>



                                <div class="content">

                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Item ID</th>
                                                <th>Item Name</th>
                                                <th>Production Available QTY</th>
                                                <th>Storage Available QTY</th>
                                                <th>Date Last Updated</th>
                                                <th class="text-right">Action</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($stocks as $stock)
                                            <tr>

                                                <td>{{$stock->stock_id}} </td>
                                                <td> {{$stock->name}} </td>
                                                <td> {{$stock->warehouse->production}} </td>
                                                <td> {{$stock->warehouse->storage}} </td>
                                                <td> {{$stock->warehouse->updated_at}}  </td>
                                                <td class="text-right">
                                                    <a class="btn btn-default btn-fill small-btn " href="{{ route('stock.show', $stock->stock_id) }}">  view </a>
                                                    <a class="btn btn-warning btn-fill small-btn " href="#">      Delete </a>
                                                </td>

                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end content-->
                            </div><!--  end card  -->
                        </div> <!-- end row -->



                        <!-- Modal New Item-->

                        <div class="modal fade" id="ModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">


                                <div class="row">
                                    <div class=" col-md-8 col-md-offset-2">

                                        <div class="card st-modal-control">
                                            <div class="stock-pop-header">
                                                <h4> New Item</h4>
                                            </div>
                                            <form method="post" action="{{ route('stock.store') }}">
                                                @csrf
                                                <div class="card-body">

                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <label>Item Name</label>
                                                            <input type="text" name="name"  class="form-control">
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Document Types</label>
                                                            <select name="documentType" class="selectpicker bottom-buffer"  data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                                @foreach($document as $list)
                                                                    {{ $list }}
                                                                    <option value="{{ $list->id }}"> {{ $list->name }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Production Opening Quantity</label>
                                                            <input type="text" name="production"  class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Storage Opening Quantity</label>
                                                            <input type="text" name="storage"  class="form-control">
                                                        </div>

                                                        <p>STATUS</p>
                                                        <div class="bootstrap-switch-container" style="width: 122px;">
                                                            <span class="bootstrap-switch-label" style="width: 30px;">&nbsp;</span>
                                                            <span class="bootstrap-switch-handle-off bootstrap-switch-info" style="width: 100px;"></span>
                                                            <input type="checkbox" name="status" checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="Active" data-off-text="Inactive">
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-default btn-fill small-btn btn-block">Add New Item</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal New Item end-->



                        <!-- Modal Material Request-->

                        <div class="modal fade" id="ModalCenter-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">


                                <div class="row">

                                    <div class=" col-md-8 col-md-offset-2">
                                        <div class="card st-modal-control">
                                            <div class="stock-pop-header">
                                                <h4> New Material Request </h4>
                                            </div>
                                            <div class="card-body">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label>Select Item Required</label>
                                                        <select name="item-required" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">

                                                            <option value="id">200</option>
                                                            <option value="ms">500</option>
                                                            <option value="ms">1000</option>
                                                            ...
                                                        </select>

                                                        <div class="row sub-info">

                                                            <div class="col-md-6">

                                                                <p> Quantity Available </p>

                                                            </div>

                                                            <div class="col-md-6 right-info">

                                                                <p> 200 </p>

                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="form-group">
                                                        <label>Quantity Required</label>
                                                        <input type="email"  class="form-control">
                                                    </div>


                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 col-md-offset-4">
                                                    <div class="text-center">
                                                        <button class="btn btn-default btn-fill small-btn btn-block">Update</button>


                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Material Request end-->




                    <!-- Button trigger modal -->


                    <!-- Modal Receive-->
                    <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">


                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">

                                    <div class="card st-modal-control">
                                        <div class="stock-pop-header">
                                            <h4> Receive Stock</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label>Select Item to Receive </label>
                                                    <select name="item-required" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                        <option value="id">200</option>
                                                        <option value="ms">500</option>
                                                        <option value="ms">1000</option>
                                                        ...
                                                    </select>

                                                    <div class="row sub-info">

                                                        <div class="col-md-6">

                                                            <p> Quantity Currently Available </p>

                                                        </div>

                                                        <div class="col-md-6">

                                                            <p> 200 </p>
                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="form-group">

                                                    <label>Quantity to Receive</label>
                                                    <input type="email"  class="form-control">

                                                    <div class="row sub-info">

                                                        <div class="col-md-6">

                                                            <p> Quantity Available after Receival </p>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <p> 200 </p>
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4 col-md-offset-4">
                                                <div class="text-center">
                                                    <button class="btn btn-default btn-fill small-btn btn-block">Submit</button>


                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Receive stock ends here-->

            </div>
        </div>




    </div>
    </div>

@endsection