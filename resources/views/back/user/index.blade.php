@extends('layouts.back-pages')
@section('content')
    @include('layouts.partial.sidebar')

    <div class="main-panel">

        @include('layouts.partial.topbar')

        <div class="main-content anchor-styling stock-styling">
            <div class="container-fluid ">

                <div class="row">

                   

                        <div class="col-md-6">

                                <h4 class="title"> User Management </h4>

                        </div>
                        
                        <div class="col-md-6">

                             <span class="btn-label">
                                 <a href="{{ route('user-management.create') }}" class="btn small-screens-mg btn-default btn-fill btn-wd pull-right btn-top">   <i class="fa fa-pencil"></i>   New User </a>
                            </span>
    
                           
    
                        </div> 
                    
                    
                    
                </div>

                    <div class="row"> 

                            <div class="card card-inner-spacer card-inner-bottom-2">
                            
                                    <div class="row spacerx2">


                                            <div class="col-md-6"> 
                                                
                                                    <h5 class="sub-title-2"> {{ $userCount }} - Available Users  </h5>
                    
                                            </div>
        
                                            
                                            
        
                                           
                                            
                                            <div class="col-md-2">
                                                
                                                    <select name="warehouse" class="selectpicker" data-title="Role" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                            <option value="id">Super Admin</option>
                                                            <option value="ms">Document Manager Approval </option>
                                                        ...
                                                    </select>
                                            
                                            </div>

                                            <div class="col-md-2">
                                                
                                                    <select name="activity" class="selectpicker" data-title="Status" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                            <option value="id">Pending</option>
                                                            <option value="ms">Active</option>
                                                        ...
                                                    </select>
                                            
                                            </div>


                                            <div class="col-md-2"> 
                                                
                                                    <button class="btn btn-default btn-fill btn-block">Submit</button>
                                            
                                            </div>
        
                                    </div>



                                <div class="content">
                                    
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                           
                                            <thead>
                                                <tr>
                                                    <th> Username</th>
                                                    <th> First Name </th>
                                                    <th> Last Name</th>
                                                    <th> Email Address</th>
                                                    <th> Action Status</th>
                                                    <th class="td-actions text-right" style="" data-field="actions"> Action </th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td> {{ $user->username }}</td>
                                                    <td> {{ $user->first_name }} </td>
                                                    <td> {{ $user->last_name }}  </td>
                                                    <td> {{ $user->email }}  </td>
                                                    <td> Active</td>
                                                   
                                                    <td class=" text-right">
                                                            <a class="btn btn-default btn-fill small-btn " href="{{ route('user-management.show', $user) }}"> View </a>
                                                            <a class="btn btn-warning btn-fill small-btn " href="#">   Delete </a>
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




 <!-- Button trigger modal -->


<!-- Modal Receive-->
<div class="modal fade" id="ModalCenter-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            
              <div class="row">
                      <div class=" col-md-8 col-md-offset-2">
                          <form method="POST" action="{{ route('register') }}">
                              @csrf
                              <div class="card st-modal-control">
                                   <div class="stock-pop-header">
                                         <h4> New User </h4> 
                                   </div>

                                  <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>First Name </label>
                                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Last Name </label>
                                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Email Address </label>
                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Phone Number</label>
                                                <input type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> City</label>
                                                <input type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                                @if ($errors->has('city'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('city') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> LGA </label>
                                                <input type="text" class="form-control{{ $errors->has('lga_lcda') ? ' is-invalid' : '' }}" name="lga_lcda" value="{{ old('lga_lcda') }}" required autofocus>
                                                @if ($errors->has('lga_lcda'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lga_lcda') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Username </label>
                                                <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                                @if ($errors->has('username'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Role </label>
                                                <select name="role" class="selectpicker" data-title="" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                    <option>Super Admin</option>
                                                    <option>Document Approval</option>
                                                            ...
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Password </label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Re-enter Password </label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                                  </div>

                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="text-center">
                                                <button type="submit" class="btn top-buffer btn-default btn-fill  btn-block"> Submit</button>
                                            </div>
                                        </div>
                                     </div>
                              </div>
                          </form>
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
@push('scripts')
    <script src="{{ asset('js/knockout-3.4.2.js') }}"></script>
@endpush