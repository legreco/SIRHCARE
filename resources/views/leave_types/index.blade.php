@extends('layouts.app')
@section('content-header')
    <h1>Types de congés<small> Liste des types de congés</small></h1>

@endsection
@section('content')
    <div class="row" id="leave_types_vue">
        <div class='col-md-1'>
            <loading></loading>
        </div>
        <div class='col-md-10'>
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
                            <th>TYPE DE CONGÉ</th>

                            <th>PAYÉ ?</th>
                            <th>DEDUCTIBLE?</th>
                            <th></th>
                        </tr>
                        <tr v-for="leave_type in leave_types">
                            <td>
                                @{{ leave_type.id }}
                            </td>
                            <td>
                                @{{ leave_type.name }}
                            </td>

                            <td>
                                <span v-if="leave_type.isPaid"> <i class="fa fa-check" style="color:green;"></i> </span>
                                <span v-else> <i class="fa fa-remove" style="color:red;"></i> </span>
                            </td>

                            <td>
                                <span v-if="leave_type.isDeductibleFromBank"> <i class="fa fa-check" style="color:green;"></i> </span>
                                <span v-else> <i class="fa fa-remove" style="color:red;"></i> </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-flat btn-warning" style="background: transparent; border: none !important;"><i class="fa fa-edit fa-lg" style="color: #0c0c0c"></i></button>
                                <button class="btn btn-sm btn-flat" style="background: transparent; border: none !important;"><i class="fa fa-trash fa-lg" style="color:black"></i></button>
                                <button class="btn btn-sm btn-flat" style="background: transparent; border: none !important;"><i class="fa fa-search fa-lg" style="color: black"></i></button>
                            </td>
                        </tr>

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
@section('script')

    <script src="{{asset("/js/leave_types/index.js") }}" type="text/javascript"></script>
@endsection