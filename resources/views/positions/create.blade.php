@extends('layouts.app')

@section('css')
    @include('includes.css.select2')
@endsection
@section('content-header')
    <h1>Gestion des postes<small>Nouvelle position</small></h1>
@endsection

@section('content')
    <div id="create_position_vue">
    <div class="row" >

        <div class="col-md-2">

        </div>
        <div class="col-md-8">
        <!-- Horizontal Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Informations de base</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                    <div class="box-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Fonction</label>
                                <div class="col-sm-8">
                                    <m-select url="/api/select/fonctions" v-on:new_value="position.fonction=arguments[0]"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Type de poste</label>
                                <div class="col-sm-5">
                                    <m-select url="/api/select/position_types" v-on:new_value="position.position_type=arguments[0]"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Titre du poste</label>
                                <div class="col-sm-8">
                                    <input type="text"  v-model="position.name"  class="form-control"/>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-4">Département</label>
                                <div class="col-sm-5">
                                    <m-select url="/api/select/departments" v-on:new_value="position.department=arguments[0]"></m-select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4">Lieu d'affectation</label>
                                <div class="col-sm-5">
                                    <m-select url="/api/select/locations" v-on:new_value="position.location=arguments[0]"></m-select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4">Grade</label>
                                <div class="col-sm-5">
                                    <m-select url="/api/select/grades" v-on:new_value="position.grade=arguments[0]"></m-select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Dépend de</label>
                                <div class="col-sm-8">
                                    <m-select url="/api/select/positions" v-on:new_value="position.position_sup=arguments[0]"></m-select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-2">
            <div class="box box-solid">

                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">

                    <button class="btn btn-block btn-primary" v-on:click.prevent="save"><i class="fa fa-floppy-o fa-lg pull-left"> </i>Sauvegarder </button>
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Résumé du poste</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">


                    <div class="form-group">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>


                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-2"></div>
    </div>


        @include('utilities.modal_loading')
    </div>

@endsection
@section('script')

    <script src="{{asset("/js/positions/create.js") }}" type="text/javascript"></script>
@endsection