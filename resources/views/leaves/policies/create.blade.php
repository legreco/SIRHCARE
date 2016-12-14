@extends('layouts.app')
@section('content-header')
    <h1>Politiques de congés</h1>
@endsection
@section('content')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
    <div class="row" id="leave_policy_create_vue">
<div class="col-md-2">

</div>
        <div class="col-md-8">
            @include('errors.form_errors')
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Informations sur la politique de congé</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="/leaveRequest" id="my-form">
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-6">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Nom</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Nom du type de congé. Ex:Congé maladie">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Description</label>

                                    <div class="col-sm-9">
                                        <textarea  rows="5" class="form-control" placeholder="" ></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" > Activer à la création
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                            </div>
                        </div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liste des congés

                <button type="button" class="btn btn-flat btn-xs btn-success pull-right" v-on:click="showAddLeaveSettingsModal"><span class="glyphicon glyphicon-plus"></span></button>
            </div>
            <div class="panel-body">

                <div  v-if="leave_settings.length==0" class="callout callout-warning">
                    <h4 style="text-align: center;"><i class="fa fa-warning"></i> Liste vide</h4>
                </div>

                <table v-if="leave_settings.length>0" class="table ">
                    <tr>
                        <th>
                            TYPE CONGÉ
                        </th>
                        <th>
                            RENOUVELLEMENT
                        </th>
                        <th>
                            ALLOCATION ANNUELLE
                        </th>
                        <th>

                        </th>
                    </tr>
                    <tr v-for="(leave_setting, index) in leave_settings ">
                        <td>
                        @{{ leave_setting.leave_type.text}}
                        </td>
                        <td>

                        </td>
                        <td>
                        @{{ leave_setting.yearly_allowance}} jour(s)
                        </td>
                        <td>
                            <button class="btn btn-flat btn-xs btn-primary"><i class="fa fa-edit"></i> </button>
                            <button class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>

                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-block btn-info pull-right">Créer type de congé</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-2">

        </div>
@include('leaves.policies.leave_settings_modal')

        @endsection
        @section('script')
            <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
            <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>

            <script src="{{ asset ("/js/leave_policies/create.js") }}" type="text/javascript"></script>



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