@extends('layouts.app')
@section('content-header')
    <h1>Types de congés</h1>
@endsection
@section('content')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
    <div class="row" id="leave_type_create_vue">
        <div class="col-md-3">
                <!-- /.box-body -->

            <!-- /.box -->
        </div>
        <div class="col-md-6">
            @include('errors.form_errors')
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Informations sur le type de congé</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="/leaveRequest" id="my-form">
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Nom</label>

                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Nom du type de congé. Ex:Congé maladie">
                            </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Code</label>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-sm-4">

                                </div>
                            </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Couleur</label>

                            <div class="col-sm-4">
                                <input type="color" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                            <div class="col-sm-4">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" v-model="deductFromBank"> Déduire de compte congé
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" v-if="deductFromBank">
                            <label for="inputEmail3" class="col-sm-4 control-label">Déduire de</label>

                            <div class="col-sm-8">
                                <select class="form-control" id="inputEmail3" placeholder="Email">
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Congé payé
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Délai soumission</label>

                            <div class=" col-sm-2">
                                <input type="number" class="form-control" min="0" placeholder="0"/>

                            </div>
                            <label  class="col-sm-2 control-label">Jour(s)</label>
                            <div class=" col-sm-4">


                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Méthode de calcul</label>

                            <div class="col-sm-8">
                                <v-select url="/api/select/leave_calculating_methods"></v-select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" > Activer à la création
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Méthode de calcul</label>

                            <div class="col-sm-8">
                               <textarea class="form-control" rows="5"></textarea>
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
        <div class="col-md-3">

        </div>


        @endsection
        @section('script')
            <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
            <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>

            <script src="{{ asset ("/js/leave_types/create.js") }}" type="text/javascript"></script>



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