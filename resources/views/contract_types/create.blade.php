@extends('layouts.app')
@section('content-header')
    <h1>Types de contrats<small></small></h1>
@endsection

@section('css')

@endsection

@section('content')

    <div class="row">


        <div class="col-md-6">
            @include('errors.form_errors')
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Informations sur le nouveau type de contrat</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form" method="post" action="/contract_types">
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label>Code du fond</label>
                            <input class="form-control"  type="text" name="code" v-model="fund.code" />
                        </div>


                        <div class="form-group">
                            <label >Nom du fond</label>
                            <input type="text" class="form-control"    name="name"  >

                        </div>

                        <div class="form-group">
                            <label>Date début</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="startDate" class="form-control pull-right">
                            </div>

                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Date fin</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="startDate" class="form-control pull-right">
                            </div>

                            <!-- /.input group -->
                        </div>



                        <!-- md6-->

                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-block btn-info pull-right">Soumettre</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-6">

        </div>
    </div>

@endsection
@section('script')


    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
@endsection