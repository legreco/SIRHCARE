@extends('layouts.app')
@section('content-header')
    <h1>
        Evaluations
        <small>Evaluations 2017 </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>

@endsection
@section('content')
    <div class="row">
        <div class='col-md-1'>
        </div>
        <div class='col-md-10'>
            <!-- Box -->

            <div class="box box-primary">

                <div class="box-body">


                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>SEXE</th>
                            <th>POSTE</th>
                            <th>SUPERVISEUR</th>
                            <th>STATUT</th>
                            <th>ACTIONS</th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr>
                                <td>
                                    {{$employee->firstName}}
                                </td>
                                <td>
                                    {{$employee->lastName}}
                                </td>
                                <td>
                                    {{$employee->gender_id}}
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <span><i class="fa fa-check fa-lg" style="color: green"></i> </span>
                                </td>
                                <td>
                                    <div class="btn-group-xs">
                                        <button class="btn btn-primary"><i class="fa fa-edit"></i> </button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach


                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    {{$employees->links()}}
                </div>
            </div><!-- /.box -->

        </div><!-- /.col -->
        <div class='col-md-1'>
        </div>
    </div>
@endsection