@extends('layouts.app')


@section('content-header')
    <h1>
        Offre d'emploi
        <small>Nouvel offre d'emploi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('content')
    <div class="row" id="create_opening_vue">

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
                <form class="form-horizontal">
                    <div class="box-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Code</label>
                            <div class="col-sm-8">
                                <input type="text"  name="name" class="form-control"  placeholder="Titre de la position">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Position</label>
                            <div class="col-sm-8">
                               <m-select url="/api/select/positions"></m-select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nbre de poste</label>
                            <div class="col-sm-2">
                                <input type="number"  name="name" class="form-control" />
                            </div>

                        </div>





                        <div class="form-group">
                            <label class="col-sm-4 control-label">Début</label>
                            <div class="col-sm-4">
                                <input type="date"  class="form-control" />
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Fin</label>
                            <div class="col-sm-4">
                                <input type="date"  class="form-control" />
                            </div>

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
    <script src="{{asset("/js/openings/create.js") }}" type="text/javascript"></script>
@endsection