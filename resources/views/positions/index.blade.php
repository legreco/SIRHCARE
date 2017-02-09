@extends('layouts.app')
@section('content-header')
    <h1>Liste des positions</h1>
@endsection
@section('content')
    <div class="row">
        <div class='col-md-1'></div>
        <div class='col-md-10'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">

                <div class="box-body">


                    <table class="table table-hover table-striped ">
                        <tr>
                            <th>STATUT</th>
                            <th>NOM DU POSTE</th>
                            <th>DEPARTEMENT</th>
                            <th>LOCATION</th>
                            <th>OCCUPÉ PAR</th>
                            <th>DATE CREATION</th>
                            <th>ACTIONS</th>
                        </tr>
                        @foreach($positions as $position)
                            <tr>
                                <td>
                                            {{$position->position_status->name}}
                                </td>

                                <td>
                                    {{$position->name}}
                                </td>
                                <td>
                                    {{$position->department->usualName}}
                                </td>
                                <td>
                                    {{$position->location->name}}
                                </td>

                                <td>
                                    {{$position->created_at}}
                                </td>
                                <td>
                                    <div class="btn-group-sm">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-info"><i class="fa fa-search"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    {{$positions->links()}}
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-1'>
        </div>
    </div>
@endsection