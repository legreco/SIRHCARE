@extends('layouts.app')
@section('css')
    @include('includes.css.select2')
@endsection
@section('content')

    <div class="col-md-6">
    <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouveau role</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" method="post" action="/role" id="my-form">
                <div class="box-body">
                   @include('authorization.role.inputs_partial')

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

@include('includes.js.select2')
    <script>





        $(".select2").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("api/permissions") }}',
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