@extends('layouts.app')

@section('css')
    @include('includes.css.select2')
@endsection
@section('content-header')
    <h1>Gestion des postes<small>Nouvelle position</small></h1>
@endsection

@section('content')
    <div class="row" id="create_position_vue">

        <div class="col-md-3"></div>
        <div class="col-md-6">
        @include('errors.form_errors')
        <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouvelle position</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form" method="post" action="/positions">
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


                        <div class="form-group">
                            <label>Statut</label>
                            <select name="position_status_id" id="position_status" style="width: 100%;"></select>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Créer position</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3"></div>
    </div>



@endsection
@section('script')

    <script src="{{asset("/js/positions/create.js") }}" type="text/javascript"></script>
@endsection