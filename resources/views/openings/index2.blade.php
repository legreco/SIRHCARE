@extends('layouts.app')
@section('content-header')
    <h1>Liste des offres d'emploi</h1>
@endsection
@section('content')
    <div class="row">
        <div class='col-md-1'></div>
        <div class='col-md-10'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">
                <div class="box-header with-border">
    <h3 class="box-title pull-left"> <i class="fa fa-star"></i> IT Développeur Intern <small> IT - Port-au-Prince</small></h3>
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
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2">
                            <!-- small box -->
                            <div class="small-box bg-aqua ">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-2">
                            <!-- small box -->
                            <div class="small-box bg-green ">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-2">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-2">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-1'></div>
    </div>
@endsection