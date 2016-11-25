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
                <div class="box-header with-border">

                </div>
                <div class="box-body">


                    <table class="table table-hover ">
                        <tr>
                            <th>NOM DU POSTE</th>
                            <th>DEPARTEMENT</th>
                            <th>LOCATION</th>
                            <th>STATUT</th>
                            <th>DATE CREATION</th>

                            <th></th>
                        </tr>
                        @foreach($positions as $position)
                            <tr>
                                <td>
                                    {{$position->name}}
                                </td>
                                <td>
                                    {{$position->department->code}}
                                </td>
                                <td>
                                    {{$position->location->code}}
                                </td>
                                <td>
                                    {{$position->position_status->name}}
                                </td>
                                <td>
                                    {{$position->created_at}}
                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforeach


                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-1'>
        </div>
    </div>
@endsection