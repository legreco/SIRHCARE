@extends('layouts.app')

@section('content')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
    <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouvelle ressource</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" method="post" action="/role" id="my-form">
                <div class="box-body">
                    @include('authorization.resource.inputs_partial')

                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">Créer rôle</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>





@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\StoreRoleRequest','#my-form') !!}
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
    <script>





        $(".select2").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("permissions/list") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });


    </script>
@endsection