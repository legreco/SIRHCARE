@extends('layouts.app')
@section('css')
   @include('includes.css.select2')
@endsection

@section('content-header')
    <h1>Gestion des utilisateurs<small>Liste des utilisateurs</small></h1>
@endsection
@section('content')
    <div class="row">
        <div class='col-md-12'>

            @if (session()->has('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>Succès</h4>
                    {{ session('status') }}
                </div>
        @endif
        <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Utilisateurs</h3>
                    <div class="box-tools">
                        <button type="button" class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#create_user_modal"><i class="fa fa-plus"></i> Ajouter</button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-condensed table-hover">
                        <tr class="info">
                            <th>Nom</th>
                            <th>Email</th>
                            <th>IsActive</th>
                            <th>Roles</th>
                            <th>Dernière connexion</th>
                            <th></th>

                        </tr>
                        @foreach($users as $user)
                            <tr onclick="window.location='{{url('/user/'.$user->id.'')}}'">
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    {{$user->isActive}}
                                </td>
                                <th>
                                    @foreach($user->roles as $role)
                                        <small class="label label-default"> {{$role->name}}</small>

                                        @endforeach
                                </th>
                                <td>
                                    {{$user->last_login}}
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
    @include('auth.user.create_modal')
@endsection
@section('script')

    @include('includes.js.select2')
    <script>





        $(".select2").select2({
            placeholder: "Select an option",
            allowClear: true,
            ajax: {
                dataType: 'json',
                url: '{{ url("roles/list") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });


    </script>
@endsection