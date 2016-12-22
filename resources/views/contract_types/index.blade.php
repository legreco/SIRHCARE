@extends('layouts.app')
@section('content-header')
    <h1>Types de contrats<small></small></h1>

@endsection
@section('content')
    <div class="row" id="leave_types_vue">
        <div class='col-md-2'>
        </div>
        <div class='col-md-8'>
            <!-- Box -->
            @include('includes.info.session_flash_status')
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Types de congés</h3>
                    <div class="box-tools">
                        <button class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Ajouter</button>
                    </div>
                </div>
                <div class="box-body">


                    <table class="table table-hover">
                        <tr>
                            <th>CODE</th>
                            <th>TYPE DE CONTRAT</th>

                            <th>DUREE INDETERMINEE</th>
                            <th></th>
                        </tr>
                        @foreach($cTypes as $cType)
                            <tr>
                                <td>
                                    {{$cType->code}}
                                </td>
                                <td>
                                    {{$cType->name}}
                                </td>
                                <td>
                                    @if($cType->undeterminedDuration)
                                    <span><i class="fa fa-check" style="color: green"></i> </span>
                                        @else
                                        <span><i class="fa fa-remove" style="color: red"></i> </span>
                                        @endif
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
        <div class='col-md-2'>
        </div>
    </div>
@endsection
@section('script')

    <script src="{{asset("/js/leave_types/index.js") }}" type="text/javascript"></script>
@endsection