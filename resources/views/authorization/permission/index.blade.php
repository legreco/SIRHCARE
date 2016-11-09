@extends('layouts.app')
@section('content-header')
    <h1>Gestion des utilisateurs<small>Liste des permissions</small></h1>
@endsection
@section('content')
<div class="row">
    <div class='col-md-6'>

        @if (session()->has('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>Succes</h4>
                {{ session('status') }}
            </div>
    @endif
        <!-- Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permissions</h3>
                <div class="box-tools">
                <button type="button" class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Ajouter</button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-condensed table-hover">
                    <tr class="info">
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Date crée</th>
                        <th></th>
                    </tr>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>
                                {{$permission->name}}
                            </td>
                            <td>
                                {{$permission->display_name}}
                            </td>
                            <td>
                                {{$permission->created_at}}
                            </td>
                            <td>
                                <a  href="" class="btn  btn-primary btn-flat btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="" class="btn  btn-info btn-flat btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                <a href="" class="btn  btn-danger btn-flat btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                {{-- <a id="register" class="btn  btn-danger btn-flat btn-xs"><i class="glyphicon glyphicon-trash"></i></a>--}}

                            </td>
                        </tr>
                    @endforeach

                </table>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div>
    @include('authorization.permission.create_modal')
@endsection
