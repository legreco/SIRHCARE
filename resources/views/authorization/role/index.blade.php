@extends('layouts.app')
@section('content-header')
    <h1>Gestion des roles </h1>
@endsection
@section('content')
    <div class='col-md-6'>
        <!-- Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="box-tools">
                    <button type="button" class="btn btn-flat btn-primary pull-left"><i class="fa fa-plus"></i> Nouveau role</button>
                </div>

            </div>
            <div class="box-body">


                <table class="table table-condensed table-hover">
                    <tr>
                        <th>Role</th>
                        <th>Code</th>
                        <th>Permissions</th>

                    </tr>
                    @foreach($roles as $role)
                        <tr onclick="window.location='{{url('/role/'.$role->id.'')}}'">
                            <td>
                                {{$role->display_name}}
                            </td>
                            <td>
                                {{$role->name}}
                            </td>
                            <td>
                                {{count($role->perms)}}
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

@endsection