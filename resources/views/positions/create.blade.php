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

        <div class="col-md-3"></div>
        <div class="col-md-6">
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

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Intitulé du poste</label>
                            <input type="text"  name="name" class="form-control" v-model="position.name"  placeholder="Titre de la position">
                        </div>
                        <div class="form-group">
                            <label>Localization</label>
                          <v-select url="/api/select/locations" v-on:new_select="position.localization=arguments[0]"></v-select>
                        </div>

                        <div class="form-group">
                            <label>Département</label>
                            <v-select url="/api/select/departments" v-on:new_select="position.department=arguments[0]"></v-select>
                        </div>

                        <div class="form-group">
                            <label>Fonction</label>
                            <v-select url="/api/select/fonctions" v-on:new_select="position.fonction=arguments[0]"></v-select>
                        </div>

{{--
                        <div class="form-group">
                            <label>Statut</label>
                            <select name="position_status_id" id="position_status" style="width: 100%;"></select>
                        </div>--}}

                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>


    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
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
                        <label>Résumé</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>


                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Éducation et Expérience</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">


                    <div class="form-group">
                        <label>Résumé</label>
                        <v-select url="/api/select/education_levels"></v-select>
                    </div>


                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
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
                        <label>Résumé</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>


                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Mission et activités</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">


                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Compétences</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text"  name="name" class="form-control" v-model="position.name"  placeholder="Titre de la position">
                    </div>
                    <div class="form-group">
                        <label>Localization</label>
                        <v-select url="/api/select/locations" v-on:new_select="position.localization=arguments[0]"></v-select>
                    </div>

                    <div class="form-group">
                        <label>Département</label>
                        <v-select url="/api/select/departments" v-on:new_select="position.department=arguments[0]"></v-select>
                    </div>

                    <div class="form-group">
                        <label>Fonction</label>
                        <v-select url="/api/select/fonctions" v-on:new_select="position.fonction=arguments[0]"></v-select>
                    </div>

                    {{--
                                            <div class="form-group">
                                                <label>Statut</label>
                                                <select name="position_status_id" id="position_status" style="width: 100%;"></select>
                                            </div>--}}

                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>

@endsection
@section('script')

    <script src="{{asset("/js/positions/create.js") }}" type="text/javascript"></script>
@endsection