@extends('layouts.app')
@section('content-header')
    <h1>Gestion des congés<small>Nouvelle demande</small></h1>
@endsection
@section('content')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-md-3">
        <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>

        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa  fa-calendar-check-o"></i>Comptes congés</h3>

                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body no-padding" style="display: block;">
                <ul class="nav nav-pills nav-stacked">

                    @foreach($leaveAccounts as $leaveAccount)
                    <li><a href="#"> {{$leaveAccount->leaveName}}
                            <span class="label label-primary pull-right">{{$leaveAccount->balance}}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /. box -->
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Labels</h3>

                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-6">
        @include('errors.form_errors')
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">FORME DE DEMANDE DE CONGE</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form" method="post" action="/leaveRequest" id="my-form">
                    <div class="box-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                            <label>Type de congé</label>
                                        <select class="form-control" id="leaveType" name="leave_type_id" style="width: 100%">
                                        </select>
                                    </div>


                                    <div class="form-group">
                                            <label >Nombre de jours</label>
                                        <input type="text" class="form-control" placeholder="Entrer le nombre de jours demandés" name="duration"  >

                                    </div>

                        <div class="form-group">
                            <label>Date début</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="startDate" class="form-control pull-right datepicker">
                            </div>

                            <!-- /.input group -->
                        </div>

                         <div class="form-group">
            <label>Commentaires</label>


            <textarea rows="5" class="form-control"  name="comments" placeholder="Une explication" n></textarea>

        </div>

                                <h4> Contact en cas d'urgence</h4>
                        <div class="form-group">
                            <label >Adresse</label>


                            <input type="text" name="address" class="form-control"  placeholder="">

                        </div>
                        <div class="form-group">
                            <label >Télephone</label>


                            <input type="text" name="telephone" class="form-control"  placeholder="">

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
    <div class="col-md-3">

    </div>
    </div>


@endsection
@section('script')
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>



    <script>
        $(".select2").select2();
        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            startDate: '+0d',
            daysOfWeekDisabled: [0,6]
        });

        $("#leaveType").select2({
            placeholder: "Selectionner un type de congé",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("api/leave_types") }}',
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