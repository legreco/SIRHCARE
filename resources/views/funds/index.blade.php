@extends('layouts.app')
@section('content-header')
    <h1>Gestions des fonds<small>Liste des fonds</small></h1>

@endsection
@section('content')
    <div class="row">
        <div class='col-md-1'>
        </div>
        <div class='col-md-10'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Demandes de congés</h3>
                </div>
                <div class="box-body">


                    <table class="table table-hover">
                        <tr>
                            <th>TYPE DE CONGÉ</th>
                            <th>DEBUTE LE</th>
                            <th>FINI LE</th>
                            <th>DURÉE</th>
                            <th>DEMANDEUR</th>
                            <th>SOUMIS LE</th>
                            <th>STATUT</th>
                        </tr>
                        @foreach($leaveRequests as $leaveRequest)
                            <tr>
                                <td>
                                    {{$leaveRequest->leave_type->name}}
                                </td>
                                <td>
                                    {{$leaveRequest->startDate}}
                                </td>
                                <td>
                                    {{$leaveRequest->endDate}}
                                </td>
                                <td>
                                    {{$leaveRequest->duration}}
                                </td>
                                <td>
                                    {{$leaveRequest->employee->fullName}}
                                </td>
                                <td>
                                    {{$leaveRequest->created_at}}
                                </td>
                                <td>
                                    {{$leaveRequest->status}}
                                </td>
                                <td>
                                    <a  href="{{url('leaveRequest',$leaveRequest->id)}}" title="détails de la demande" class="btn  btn-primary btn-flat btn-xs"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                    <a href="" title="approuver" class="btn  btn-success btn-flat btn-xs"><i class="glyphicon glyphicon-ok"></i></a>
                                    <a href="" title="rejeter la demande" class="btn  btn-danger btn-flat btn-xs"><i class="glyphicon glyphicon-remove"></i></a>
                                    {{-- <a id="register" class="btn  btn-danger btn-flat btn-xs"><i class="glyphicon glyphicon-trash"></i></a>--}}

                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    {{ $leaveRequests->links() }}
                </div>
            </div><!-- /.box -->

        </div><!-- /.col -->
        <div class='col-md-1'>
        </div>
    </div>
@endsection