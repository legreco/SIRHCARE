@extends('layouts.app')
@section('content-header')

<h1> Gestion des jours chomés </h1>
@endsection
@section('css')
    <style>
        .slide-fade-enter-active {
            transition: all .3s ease;
        }
        .slide-fade-leave-active {
            transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
        }
        .slide-fade-enter, .slide-fade-leave-active {
            transform: translateX(10px);
            opacity: 0;
        }
    </style>
    <link href="{{ asset("/bower_components/fullcalendar/fullcalendar.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/fullcalendar/fullcalendar.print.min.css")}}" rel="stylesheet" type="text/css" media="print" />

    @endsection
@section('content')
    <div id="holiday_lists_vue">


                <div class="row">
                    <div class='col-md-4'>
                    </div>
                    <div class='col-md-4'>
                        <!-- Box -->
                        @include('includes.info.session_flash_status')
                        <div class="box box-primary">

                            <div class="box-body">

                                <form class="form" method="post" action="/funds">
                                    <div class="box-body">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <label>Spécifier l'année</label>
                                            <input class="form-control"  type="number" v-model="year" />
                                        </div>






                                        <!-- md6-->

                                        <!-- /.row -->
                                    </div>
                                    <!-- /.box-body -->

                                    <!-- /.box-footer -->
                                </form>


                            </div><!-- /.box-body -->
                            <div class="box-footer">

                                <button v-on:click="showList = !showList" class="btn btn-block btn-flat btn-info">Suivant <i class="fa fa-arrow-right"></i> </button>
                            </div>
                        </div><!-- /.box -->

                    </div><!-- /.col -->
                    <div class='col-md-4'>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">

                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Liste des jours chomés de l'année @{{year}}</h3>


                            </div>
                            <div class="box-body">


                                <div v-if="holidays.length==0" class="callout callout-warning">
                                    <h4><i class="fa fa-warning"></i>     Liste vide!</h4>
                                    La liste est vide. Veuillez ajouter des éléments
                                </div>
                                <table v-if="holidays.length>0" class="table table-condensed">
                                    <tr>
                                        <th>Date(s)</th>
                                        <th> Jour</th>
                                        <th> Evénement</th>
                                        <th></th>

                                    </tr>

                                    <tr v-for="holiday in holidays" >
                                        <td >
                                            <div v-cloak>
                                                @{{ holiday.startDate }}
                                            </div>
                                        </td>
                                        <td>
                                            <div v-cloak>
                                                @{{ holiday.endDate }}
                                            </div>
                                        </td>
                                        <td>
                                            <div v-cloak>
                                                @{{ holiday.name }}
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-warning">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </button>
                                            <button class="btn btn-xs btn-info">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                            <button class="btn btn-xs btn-danger">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </button>
                                        </td>

                                </table>

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button type="submit"  class="btn btn-block btn-success pull-right">
                                            <i class="fa fa-save"></i>
                                            Sauvegarder liste
                                        </button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>

                            </div>
                        </div><!-- /.box -->
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="calendar">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>




        @include('holiday_lists.add_holiday_modal')
    </div>

@endsection


@section('script')

    <script src="{{asset("/bower_components/fullcalendar/fullcalendar.min.js") }}" type="text/javascript"></script>


        <script src="{{asset("/js/holiday_lists/create.js") }}" type="text/javascript"></script>

@endsection