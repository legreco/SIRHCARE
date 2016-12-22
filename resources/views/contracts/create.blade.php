@extends('layouts.app')
@section('content-header')
    <h1>Contracts<small> Nouveau contract</small></h1>
@endsection

@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div id="create_contract_vue">

        <div class="row">

            <div class="col-lg-3" style="position: fixed;">



                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Folders</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                                    <span class="label label-primary pull-right">12</span></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                            <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                            <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>
                <!-- /. box -->


            </div>

            <div class="col-lg-9 col-lg-offset-3">
                <form class="form-horizontal" method="post" action="/funds">

                    <div class="row" >

                        <div  class="col-md-1"></div>

                        <div class="col-md-8">

                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Informations sur le poste</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">

                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Poste</label>

                                        <div class="col-sm-8">

                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-primary" v-on:click.prevent="showSearchPositionModal"><i class="fa fa-search"></i> </button>
                                                </div>
                                                <!-- /btn-group -->
                                                <input type="text" class="form-control" readonly>
                                            </div>

                                        </div>



                                    </div>

                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Département</label>

                                        <div class=" col-sm-8">
                                           <input type="text" class="form-control" readonly/>

                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Location</label>


                                        <div class=" col-sm-8">

                                            <input type="text" class="form-control" readonly>

                                        </div>

                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Poste supervisant</label>

                                        <div class=" col-sm-8">
                                            <input type="text" class="form-control" readonly/>

                                        </div>


                                    </div>






                                    <!-- md6-->

                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->

                                <!-- /.box-footer -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-3"></div>

                    </div>

                    <div class="row" >

                        <div  class="col-md-1"></div>

                        <div class="col-md-8">

                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Informations générales</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">

                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Type contrat</label>

                                        <div class=" col-sm-8">
                                            <v-select url="/api/select/contract_types"></v-select>

                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Catégorie contrat</label>

                                        <div class=" col-sm-8">
                                            <v-select url="/api/select/contract_types"></v-select>

                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Début contrat</label>


                                        <div class=" col-sm-8">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="startDate" class="form-control pull-right">
                                            </div>
                                        </div>

                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Fin contrat</label>


                                        <div class=" col-sm-8">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="startDate" class="form-control pull-right">
                                            </div>
                                        </div>

                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" v-model="trialPeriod"> Période probatoire
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" v-if="trialPeriod">
                                        <label  class="col-sm-4 control-label">Durée probation</label>

                                        <div class=" col-sm-2">
                                            <input type="number" class="form-control"/>

                                        </div>

                                        <label  class="col-sm-1 control-label">mois</label>
                                        <div class=" col-sm-5">


                                        </div>
                                    </div>



                                    <!-- md6-->

                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->

                                <!-- /.box-footer -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-3"></div>

                    </div>
                    <div class="row">
                        <div  class="col-md-1"></div>

                        <div class="col-md-10">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Informations financières</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">

                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Salaire/Devise</label>

                                        <div class=" col-sm-4">
                                            <input type="number" class="form-control" min="0" placeholder="0"/>

                                        </div>

                                        <div class=" col-sm-4">
                                            <v-select url="/api/select/currencies"></v-select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Période salaire</label>

                                        <div class=" col-sm-4">
                                            <v-select url="/api/select/salary_periods"></v-select>

                                        </div>

                                        <div class=" col-sm-4">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" v-model="salaryRepartition"> Spécifier répartition salaire
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="salaryRepartition" class="panel panel-primary">
                                        <div class="panel-heading">Résultats</div>
                                        <div class="panel-body">
                                            <table class="table table-striped table-hover">
                                                <tr>
                                                    <th>
                                                        DEPT ID
                                                    </th>
                                                    <th>
                                                        FUND CODE
                                                    </th>
                                                    <th>
                                                       BUSINESS UNIT
                                                    </th>
                                                    <th>
                                                        PROJECT ID
                                                    </th>
                                                    <th>
                                                        SOURCE TYPE
                                                    </th>
                                                    <th>
                                                        DISTRIBUTION
                                                    </th>
                                                    <th>
                                                        <div class="btn-group-sm">
                                                            <button type="button" class="btn btn-success" v-on:click.prevent="showAddDistributionLineModal"><i class="fa fa-plus"></i> </button>
                                                            <button type="button" class="btn btn-danger"><i class="fa fa-remove"></i></button>

                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr v-for="dist_line in dist_lines">
                                                    <td>
                                                        @{{ dist_line.deptId.text }}
                                                    </td>
                                                    <td>
                                                        @{{ dist_line.fundCode.text }}
                                                    </td>
                                                    <td>
                                                        @{{ dist_line.businessUnit.text }}
                                                    </td>
                                                    <td>
                                                        @{{ dist_line.projectId.text }}
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="btn-group-xs">
                                                            <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> </button>
                                                            <button type="button" class="btn btn-danger"><i class="fa fa-remove"></i></button>

                                                        </div>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                    <!-- /.input group -->
                                </div>



                                <!-- md6-->

                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <div class="col-md-1"></div>


                    </div>
                    <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Allocations</h3>
                                    <div class="box-tools">
                                        <button class="btn btn-sm btn-flat btn-success" v-on:click.prevent="addAllocationLine">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">

                                    <div v-if="allocations.length==0" class="callout callout-warning">
                                        <h4 style="text-align: center;"><i class="fa fa-warning"></i>     Liste vide!</h4>
                                    </div>
                                    <table v-if="allocations.length>0" class="table table-condensed">
                                        <tr>
                                            <th> Type allocation</th>
                                            <th> Montant</th>
                                            <th> Devise</th>
                                            <th></th>

                                        </tr>

                                        <tr v-for="allocation in allocations" >
                                            <td >
                                                <div v-cloak>
                                                    @{{ allocation.allocation_type }}
                                                </div>
                                            </td>
                                            <td>
                                                <div v-cloak>
                                                    @{{ allocation.amount }}
                                                </div>
                                            </td>
                                            <td>
                                                <div v-cloak>
                                                    @{{ allocation.currency }}
                                                </div>
                                            </td>
                                            <td>

                                                <a><i class="fa fa-edit"></i> </a>
                                                <a><i class="fa fa-remove"></i> </a>
                                            </td>
                                        </tr>
                                    </table>



                                    <!-- /.input group -->
                                </div>



                                <!-- md6-->

                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <div class="col-md-1"></div>


                    </div>
                </form>
            </div>


        </div>
        @include('contracts.modal_search_position')
        @include('contracts.modal_add_dist_line')
    </div>
@endsection
@section('script')

    <script src="{{asset("/js/contracts/create.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
@endsection