@extends('layouts.app')

@section('content-header')
    <h1><i class="fa fa-calendar"></i> Préavis</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <!-- Box -->

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-th-list"></i> Liste des durées standards</h3>
                </div>
                <div class="box-body">


                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Minimun</th>
                            <th>Maximun</th>
                            <th>Préavis</th>

                        </tr>
                        @foreach($noticePeriods as $noticePeriod)
                            <tr>
                                <td >
                                    {{$noticePeriod->minMonthsOfService}} mois
                                </td>
                                <td>
                                    {{$noticePeriod->maxMonthsOfService}} mois
                                </td>
                                <td>
                                    {{$noticePeriod->priorDaysOfNotice}} jours
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                                    </div>


                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                </div>
            </div><!-- /.box -->


        </div><!-- /.col -->
        <div class="col-md-3">

        </div>



    </div>


@endsection

