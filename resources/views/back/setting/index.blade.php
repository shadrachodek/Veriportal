@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid ">

                <div class="row">

                    

                            <h4 class="title">Settings</h4>
                   
                    
                    
                </div>

                    <div class="row"> 

                            <div class="card card-inner-spacer boxes">

                                <div class="row">

                                    <div class="col-md-4 col-md-offset-4">

                                            <div class="center-screen">
                                                <ul>
                                                    <li> <a href="settings-lga-cda.html"> LGA/LCDA's </a> </li>    
                                                    <li> <a href="settings-payment-type.html"> Payment Type  </a> </li>  
                                                    <li><a href="{{ route('setting.user.roles') }}"> User Roles & Priviledges </a></li>
                                                    <li><a href="settings-stock-warehouse.html"> Stock Warehouse </a></li>  
                                                </ul>
                                            </div>
                                    </div>

                                   

                                </div>
                                                              
                            </div><!--  end card  -->
                    </div> <!-- end row -->


                    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"> Bio Data </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row ">
            <div class="col-md-8">
                    <p>afffa</p>
            </div>

            <div class="col-md-4">
                <p>afffa</p>
            </div>
        </div>
       
      </div>
     
    </div>
  </div>
</div>


            </div>
        </div>


        

    </div>
</div>
@endsection