@extends('layouts.app')

@section('css')
    @include('includes.css.datepicker3')
    @include('includes.css.select2')
@endsection
@section('content-header')
    <h1>Gestion des offres d'emploi<small>Nouvelle offre</small></h1>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
        @include('errors.form_errors')
        <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouvelle offre</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form" method="post" action="/openings">
                    <div class="box-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text"  name="name" class="form-control"  placeholder="Titre de la position">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <select name="position_id" id="position" style="width: 100%;"></select>
                        </div>

                        <div class="form-group">
                            <label>Nombre d'emploi</label>
                            <input type="number"  name="number" class="form-control"  placeholder="Nbre de poste à pourvoir">
                        </div>

                        <div class="form-group">
                            <label>Début</label>
                            <input type="text"  name="startDate" id="startDate" class="form-control"  placeholder="Date d'ouverture de l'offre">
                        </div>

                        <div class="form-group">
                            <label>Fin</label>
                            <input type="text"  name="endDate" id="endDate" class="form-control"  placeholder="Date de fin de l'offre">
                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Créer Offre d'emploi</button>
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
    @include('includes.js.datepicker3')
    @include('includes.js.select2')
    <script src="{{asset("/js/openings/create.js") }}" type="text/javascript"></script>
@endsection