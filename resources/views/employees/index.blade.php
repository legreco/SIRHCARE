@extends('layouts.app')
@section('content-header')
    <h1>Liste des employés</h1>
@endsection
@section('content')
    <div class="row">
        <div class='col-md-12'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">
                <div class="box-header with-border">

                </div>
                <div class="box-body">


                    <table class="table table-hover ">
                        <tr>
                            <th>CODE</th>
                            <th>NOM</th>
                            <th>PRÉNOM</th>
                            <th>CATEGORIE</th>
                            <th>SEXE</th>
                            <th>POSTE</th>
                            <th>SALAIRE (USD)</th>
                            <th>DEPARTEMENT</th>
                            <th>LOCALISATION</th>
                           {{-- <th>POSTE</th>
                            <th>DEPARTEMENT</th>
                            <th>SALAIRE</th>--}}

                            <th></th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr>
                                <td>
                                    {{$employee->employeeId}}
                                </td>
                                <td>
                                    {{$employee->firstName}}
                                </td>
                                <td>
                                    {{$employee->lastName}}
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>

                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            {{--    <td>
                                    {{$employee->contract->job->departement}}
                                </td>
                                <td>
                                    @if (count($employee->contract))
                                        {{$employee->contract->salary}}
                                    @endif
                                </td>
                                <td>
                                    @if (count($employee->employee))
                                        {{$employee->employee->fullName}}
                                    @endif

                                </td>--}}



                                <td>

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
        <div class='col-md-2'>
            </div>
    </div>
@endsection