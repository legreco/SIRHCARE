@extends('layouts.app')
@section('content-header')
    <h1>Mes évaluations <small></small></h1>

@endsection
@section('content')
    <div class="row">
        <div class='col-md-1'>
        </div>
        <div class='col-md-10'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">

                <div class="box-body">


                    <table class="table table-hover">
                        <tr>
                            <th>ANNÉE</th>
                            <th>JOURS FERIES</th>
                            <th>STATUT</th>
                            <th>CREE LE</th>
                            <th>DERNIERE MODIFICATION</th>
                        </tr>
                        @foreach($hLists as $hList)
                            <tr>
                                <td>
                                    {{$hList->calendarYear}}
                                </td>
                                <td>

                                </td>
                                <td>
                                    {{$hList->status}}
                                </td>
                                <td>

                                </td>
                                <td>
                                    {{$hList->updated_at}}
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