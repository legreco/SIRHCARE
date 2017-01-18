@extends('layouts.app')
@section('content-header')
    <h1><i class="fa fa-line-chart"></i> <i class="fa fa-money"></i> Taux de change<small></small></h1>
@endsection

@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row" id="exchange_rate_create_vue">

<div class="col-md-3"></div>
        <div class="col-md-6">
            @include('errors.form_errors')
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouveau Taux de change</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="/funds">
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Monnaie d'entrée</label>
                            <div class="col-sm-6">
                           <v-select url="/api/select/currencies"></v-select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Monnaie d'entrée 2</label>
                            <div class="col-sm-6">
                                <v-select url="/api/select/currencies"></v-select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Monnaie de sortie</label>
                            <div class="col-sm-6">
                                <v-select url="/api/select/currencies"></v-select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Taux de change</label>
                            <div class="col-sm-4">
                                <input  type=number  class="form-control"  type="text" name="code"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Date</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control"  type="text" name="code"  />
                            </div>
                        </div>



                        <!-- md6-->

                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-block btn-success"> <i class="fa fa-floppy-o"></i> Sauvegarder </button>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>

@endsection
@section('script')

    <script src="{{asset("/js/exchange_rates/create.js") }}" type="text/javascript"></script>
@endsection