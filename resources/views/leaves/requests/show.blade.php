@extends('layouts.app')
@section('content-header')
    <h1>Demande de congé<small>#{{$leaveRequest->id}}</small></h1>

@endsection
@section('content')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />

    <div class="row">
        <div class="col-md-2">

        </div>
    <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouvelle demande de congé</h3>
                    <div class="box-tools">

                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i>
                            <span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="glyphicon glyphicon-print"></i>Imprimer </a> </li>
                            <li><a href="#"><i class="glyphicon glyphicon glyphicon-download"></i>Télecharger</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i>Visualiser pdf</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                    <div class="box-body">
                        <div class="panel">
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    De
                                    <address>
                                        <strong>{{$leaveRequest->employee->fullName}}</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (804) 123-5432<br>
                                        Email: {{$leaveRequest->employee->email}}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Demande #{{$leaveRequest->id}}</b><br>
                                    <br>
                                    <b>Date:</b> {{$leaveRequest->created_at}}<br>
                                    <b>Payment Due:</b> 2/22/2014<br>
                                    <b>Statut: {{$leaveRequest->status}}</b>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <p>Informations sur le congé</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody><tr>
                                            <th style="width:50%">Type congé:</th>
                                            <td>{{$leaveRequest->leave_type->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date début:</th>
                                            <td>{{$leaveRequest->startDate}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date fin:</th>
                                            <td>{{$leaveRequest->endDate}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date retour:</th>
                                            <td>{{$leaveRequest->endDate}}</td>
                                        </tr>
                                        <tr>
                                            <th>Durée:</th>
                                            <td>{{$leaveRequest->duration}} jour(s)</td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>

                    </div>


                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-4">
                                <form class="form" method="post" action="/leaveRequest/reject">
                                    {{csrf_field()}}

                                    <input type="hidden" name="id" value="{{$leaveRequest->id}}">
                                <button type="submit" class="btn  btn-danger btn-block">Rejeter</button>
                                </form>
                            </div>

                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <form class="form" method="post" action="/leaveRequest/approve">
                                    {{csrf_field()}}
                                    <input type="hidden" name="leave_request_id" value="{{$leaveRequest->id}}">
                                    <button type="submit" class="btn  btn-success btn-block">Approuver</button>
                                </form>
                            </div>

                    </div>

            </div>
    </div>
        <div class="col-md-2">

        </div>
   </div>


@endsection
@section('script')
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>



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
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("leave_types/all") }}',
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