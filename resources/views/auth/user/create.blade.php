@extends('layouts.app')
@section('content-header')
    <h1>Gestion des utilisateurs<small>Créer un nouvel utilisateur</small></h1>
@endsection

@section('content')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
    <div class="row">


        <div class="col-md-6">
        @include('errors.form_errors')
        <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouvel utilisateur</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form" method="post" action="/user" id="my-form">
                    <div class="box-body">
                        @include('auth.user.inputs_partial')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Créer utilisateur</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>

    </div>



@endsection
@section('script')
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
    <script>





            $(".select2").select2({
                placeholder: "Select an option",
                allowClear: true,
                ajax: {
                    dataType: 'json',
                    url: '{{ url("roles/list") }}',
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