@extends('layouts.app')
@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('content-header')
    <h1></h1>
@endsection
@section('content')



    <div class="row" >
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table  class="table table-bordered table-striped" id="employee_pars_table">
                        <thead>
                        <tr>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>

                        </thead>



                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>

    <script>
        $('#employee_pars_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'https://datatables.yajrabox.com/eloquent/add-edit-remove-column-data',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    </script>

@endsection