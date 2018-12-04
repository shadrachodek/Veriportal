@extends('layouts.dataapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2>Examples</h2>
                    </div>

                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header bg-dark" id="simple-heading">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#simple" aria-expanded="true" aria-controls="simple">
                                            <h4 class="m-0">Simple</h4>
                                        </button>
                                    </h5>
                                </div>

                                <div id="simple" class="collapse" aria-labelledby="simple-heading" data-parent="#accordionExample">
                                    <div class="card-body">
<table id="simple-datatable-example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#simple-datatable-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('simple_datatables_users_data') }}",
                columns: [
                    { name: 'first_name' },
                    { name: 'last_name' },
                ],
            });
        });
    </script>
@endpush
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