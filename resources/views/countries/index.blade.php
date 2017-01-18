@extends('layouts.app')

@section('content-header')
    <h1><i class="fa fa-globe"></i> Liste des Pays</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <!-- Box -->

            <div class="box box-primary">

                <div class="box-body">


                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Code</th>
                            <th>Alpha2</th>
                            <th>Alpha3</th>
                            <th>Pays</th>
                            <th></th>

                        </tr>
                        @foreach($countries as $country)
                        <tr>
                            <td >
                               {{$country->code}}
                            </td>
                            <td>
                                {{$country->alpha2}}
                            </td>
                            <td>
                                {{$country->alpha3}}
                            </td>
                            <td>
                                {{$country->name_fr}}
                            </td>
                            <td></td>
                        </tr>
                        @endforeach

                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    {{$countries->links()}}
                </div>
            </div><!-- /.box -->


        </div><!-- /.col -->
        <div class="col-md-2">

        </div>



    </div>


@endsection

