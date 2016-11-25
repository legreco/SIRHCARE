@extends('layouts.app')
@section('content-header')
    <h1>Liste des offres d'emploi</h1>
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
                                <th>NO OFFRE</th>
                                <th>INTITULE DE POSTE</th>
                                <th>DEBUT</th>
                                <th>INTITULE DE POSTE</th>
                                <th>NO OFFRE</th>
                                <th>INTITULE DE POSTE</th>
                                <th></th>
                            </tr>
                            @foreach($openings as $opening)
                                <tr>
                                    <td>
                                        {{$opening->code}}
                                    </td>
                                    <td>
                                        {$opening->code}}
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

    </div>
@endsection