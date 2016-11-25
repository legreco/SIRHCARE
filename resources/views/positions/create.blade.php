@extends('layouts.app')

@section('css')
    @include('includes.css.select2')
@endsection
@section('content-header')
    <h1>Gestion des postes<small>Nouvelle position</small></h1>
@endsection

@section('content')
    <div class="row">

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
                            <input type="text"  name="name" class="form-control"  placeholder="Titre de la position">
                        </div>
                        <div class="form-group">
                            <label>Localization</label>
                            <select name="location_id" id="location" style="width: 100%;"></select>
                        </div>

                        <div class="form-group">
                            <label>Département</label>
                            <select name="department_id" id="department" style="width: 100%;"></select>
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
    @include('includes.js.select2')
    <script src="{{asset("/js/positions/create.js") }}" type="text/javascript"></script>
@endsection