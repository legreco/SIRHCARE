@extends('layouts.app')
@section('css')
    <link href="{{ asset("/bower_components/fullcalendar/fullcalendar.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/fullcalendar/fullcalendar.print.css")}}" rel="stylesheet" type="text/css" media="print" />
    @endsection
@section('content-header')
    <h1>Gestion des congés<small>Nouvelle demande</small></h1>
@endsection
@section('content')

<div class="row" id="leave_request_create_vue">
    <div class="col-md-3">

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
                <form class="form-horizontal" method="post" action="/leaves/requests">
                    <div class="box-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                            <label class="col-sm-4 control-label">Type de congé</label>
                                        <div class="col-sm-6">
                                            <v-select url="/api/select/leave_types/active" v-on:new_select="leave_request.type=arguments[0]" ></v-select>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                            <label class="col-sm-4 control-label" >Nombre de jours</label>
                                        <div class="col-sm-2">
                                        <input type="number" class="form-control"  v-model="leave_request.duration" min="1"  >
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Premier jour congé</label>

                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input type="text" v-model="startDate"  class="form-control pull-right" readonly>
                                </div>
                                <div class="col-sm-1">
                                    <button class="btn btn-flat btn-default" v-on:click.prevent="showCalendar"><i class="fa fa-calendar"></i> </button>
                                </div>


                            </div>

                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Dernier jour congé</label>

                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input type="text" v-model="endDate" class="form-control" readonly>
                                </div>


                            </div>

                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Date retour</label>

                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input type="text" v-model="returnDate" class="form-control" readonly>
                                </div>


                            </div>

                            <!-- /.input group -->
                        </div>

                         <div class="form-group">
            <label class="col-sm-4 control-label">Commentaires</label>
                             <div class="col-sm-8">
                                 <textarea rows="8" class="form-control"  name="comments" placeholder="Commentaires" ></textarea>
                             </div>



        </div>

                                <h4> Contact en cas d'urgence</h4>


                        <div class="form-group">
                            <label class="col-sm-4 control-label" >Adresse</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="duration"  >
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" >Telephone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="duration"  >
                            </div>
                            <div class="col-sm-4">

                            </div>

                        </div>

                            <!-- md6-->

                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-block btn-info" v-on:click="save"><i class="fa fa-floppy-o"></i> Sauvegarder</button>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-block btn-success"  v-on:click.prevent="submit"><i class="fa fa-paper-plane"></i> Soumettre</button>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        @include('leave_requests.modal_calendar')
</div>
    <div class="col-md-3">

    </div>

</div>

@endsection
@section('script')
    <script src="{{asset("/bower_components/fullcalendar/fullcalendar.min.js") }}" type="text/javascript"></script>

   <script src="{{ asset ("/js/leave_requests/create.js") }}" type="text/javascript"></script>

@endsection