@extends('layouts.app')
@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('content-header')
    <h1>Mes PARs</h1>
@endsection
@section('content')



        <div class="row" >
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box">
                    <div class="box-body">
                        <table  class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Statut</th>
                                <th>Periode</th>
                                <th>Soumis le</th>
                                <th>Actions</th>
                            </tr>

                            </thead>
                            <tbody>

                            @foreach($pars as $par)
                                <tr>
                                    <td>
                                    <td>
                                        {{$par->period->format('F Y')}}
                                    </td>
                                    <td>
                                        {{$par->submittedOn}}
                                    </td>
                                    <td>
                                        <a href="{{url('pars',$par->id)}}" class="btn btn-flat btn-primary btn-xs"> <i class="fa fa-search"></i> </a>
                                    </td>
                                </tr>

                              @endforeach
                            </tbody>



                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>



@endsection