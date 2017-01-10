@extends('layouts.app')

@section('content-header')
    <h1><i class="fa fa-language fa-2x"></i> Langages</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <!-- Box -->

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-th-list"></i> Liste des languages</h3>
                </div>
                <div class="box-body">


                    <table class="table table-hover table-striped">
                        <tr>
                            <th>No</th>
                            <th>Langage</th>
                            <th></th>

                        </tr>
                        @foreach($languages as $language)
                            <tr>
                                <td >
                                    {{$language->id}}
                                </td>
                                <td>
                                    {{$language->name}}
                                </td>
                                <td>
                                    <div class="btn btn-group-xs">

                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    {{$languages->links()}}
                </div>
            </div><!-- /.box -->


        </div><!-- /.col -->
        <div class="col-md-4">

        </div>



    </div>


@endsection

