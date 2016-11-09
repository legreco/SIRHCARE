@extends('layouts.app')
@section('content-header')

    <h1>Gestion des resources<small>Détails de la resource</small></h1>
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Informations générales </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">


                                <dl class="dl-horizontal">
                                    <dt>Nom de la ressoure</dt>
                                    <dd>{{$resource->display_name}}</dd>
                                    <dt>Code de la ressoure</dt>
                                    <dd>{{$resource->name}}</dd>
                                    <dt>Permissions</dt>
                                    <dd>{{count($resource->permissions)}}
                                    </dd>
                                    <dt>Créé le</dt>
                                    <dd>{{$resource->created_at}}
                                    </dd>
                                    <dt>Dernière mise à jour</dt>
                                    <dd>{{$resource->updated_at}}
                                    </dd>
                                </dl>


                </div>
                <!-- /.box-body -->
                <div class="box-footer">


                </div>
                <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
<div class="row">

    <div class="col-md-10">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Permissions associés </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

                <div class="box-body">



                    <table class="table table-condensed table-hover">
                        <tr>
                            <th>Nom permission</th>
                            <th></th>
                            <th></th>

                        </tr>
                        @foreach($resource->permissions as $permission)
                            <tr >
                                <td>
                                    {{$permission->name}}
                                </td>
                                <td>
                                    {{$permission->shortName}}
                                </td>
                                <td>

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
                </div>
                <!-- /.box-body -->
                <div class="box-footer">


                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>

</div>


@endsection
