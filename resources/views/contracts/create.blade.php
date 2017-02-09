@extends('layouts.app')
@section('content-header')
    <h1>Contracts<small> Nouveau contract</small></h1>
@endsection



@section('content')
    <div id="create_contract_vue">

        <form class="form-horizontal">
            <div class="row" >

                <div  class="col-md-2"></div>

                <div class="col-md-8">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Informations employé</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Employé</label>

                                <div class="col-sm-8">

                                <m-select url="/api/select/employees" v-on:new_value="employee=arguments[0]"></m-select>

                                </div>



                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Code employé</label>


                                <div class=" col-sm-4">

                                    <input type="text" class="form-control" v-model="employee.employeeId" readonly>

                                </div>

                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">CIN ou NIF</label>

                                <div class=" col-sm-4">
                                    <input type="text" class="form-control" v-model="employee.cinOrNif" readonly/>

                                </div>


                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Adresse</label>

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
                <div class="col-md-2"></div>

            </div>
            <div class="row" >

                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Type/Durée contrat</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Type contrat</label>

                                <div class=" col-sm-6">
                                    <m-select url="/api/select/contract_types" v-on:new_value="contract.contract_type_id=arguments[0]"></m-select>

                                </div>


                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label"> Début contrat</label>


                                <div class=" col-sm-4">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" name="startDate" class="form-control pull-right">
                                    </div>
                                </div>

                                <!-- /.input group -->
                            </div>
                            <div class="form-group" v-if="!contract.contract_type_id.undeterminedDuration">
                                <label class="col-sm-4 control-label"> Fin contrat</label>


                                <div class=" col-sm-4">
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

                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->

                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-2"></div>

            </div>
            <div class="row" >

                <div  class="col-md-2"></div>

                <div class="col-md-8">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Poste cible</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Poste</label>

                                <div class="col-sm-8">

                                    <m-select url="/api/select/positions"></m-select>

                                </div>



                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Département</label>

                                <div class=" col-sm-4">
                                    <input type="text" class="form-control" readonly/>

                                </div>


                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"> Location</label>


                                <div class=" col-sm-4">

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
                <div class="col-md-2"></div>

            </div>


            <div class="row">
                <div  class="col-md-2"></div>

                <div class="col-md-8">
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
                                    <m-select url="/api/select/currencies"></m-select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Période salaire</label>

                                <div class=" col-sm-4">
                                    <m-select url="/api/select/salary_periods"></m-select>

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

                <div class="col-md-2"></div>


            </div>
            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
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

                <div class="col-md-2"></div>


            </div>
        </form>
        @include('contracts.modal_search_position')
        @include('contracts.modal_add_dist_line')
    </div>
@endsection
@section('script')

    <script src="{{asset("/js/contracts/create.js") }}" type="text/javascript"></script>

@endsection